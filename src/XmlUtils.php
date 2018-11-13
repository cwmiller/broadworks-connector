<?php

namespace CWM\BroadWorksConnector;

use CWM\BroadWorksConnector\Ocip\Nil;
use DOMDocument;
use DOMElement;
use MyCLabs\Enum\Enum;
use ReflectionClass;

class XmlUtils
{
    const ENUM_BASE_TYPE = 'MyCLabs\Enum\Enum';

    /**
     * @param DOMElement $element
     * @param string $className
     * @param string $baseNamespace
     * @return object
     * @throws XmlException
     */
    public static function fromXml(DOMElement $element, $className, $baseNamespace)
    {
        $refClass = null;
        $instance = null;

        try {
            $refClass = new ReflectionClass($className);

            if ($refClass->isAbstract()) {
                // If abstract, the XML should have a type attribute denoting the concrete type
                $className = self::qualifiedClassForType($element, $baseNamespace);
                $refClass = new ReflectionClass($className);
            }

            // Now that we know the class name that corresponds to the element, we can initialize it.
            // Enum types require passing the value to the constructor. All other models are initialized with an empty constructor.

            if (self::isEnum($refClass)) {
                // An EnumValueType annotation is expected to be on all enums which includes the scalar type the enum uses.
                $annotations = self::getAnnotations($refClass->getDocComment());

                if (!array_key_exists('EnumValueType', $annotations)) {
                    throw new XmlException('No @EnumValueType attribute found on enum ' . $refClass->getName());
                }

                $valueType = $annotations['EnumValueType'];
                $nodeValue = $element->nodeValue;

                // Enums can really only be ints or strings. If it is an int, the value of the element is casted since
                // all node values are strings.
                if ($valueType === 'int') {
                    $nodeValue = (int)$nodeValue;
                }

                $instance = new $className($nodeValue);
            } else {
                $instance = new $className();
            }

            // Iterate over all children in the XML element
            $childElements = $element->childNodes;
            for ($i = 0; $i < $childElements->length; $i++) {
                $childElement = $childElements->item($i);
                $isNil = ($childElement instanceof DOMElement) && $childElement->getAttribute('xsi:nil') === 'true';
                $elementName = $childElement->localName;
                $propertyName = lcfirst($elementName);

                if ($refClass->hasProperty($propertyName)) {
                    $refProperty = $refClass->getProperty($propertyName);
                    $annotations = self::getAnnotations($refProperty->getDocComment());
                    $nodeValue = null;

                    if (!array_key_exists('Type', $annotations)) {
                        throw new XmlException(sprintf('No @Type attribute found on property %s::%s', $refClass->getName(), $refProperty->getName()));
                    }

                    $type = $annotations['Type'];
                    $isArray = array_key_exists('Array', $annotations);

                    // Set the property as accessible so we can modify it even though it's private
                    $refProperty->setAccessible(true);

                    if ($isNil) {
                        $nodeValue = new Nil();
                    } else {
                        if (self::isScalar($type)) {
                            switch ($type) {
                                case 'int':
                                    $nodeValue = (int)$childElement->nodeValue;
                                    break;
                                case 'bool':
                                    $nodeValue = $childElement->nodeValue === 'true';
                                    break;
                                case 'float':
                                    $nodeValue = (float)$childElement->nodeValue;
                                    break;
                                default:
                                    $nodeValue = (string)$childElement->nodeValue;
                            }
                        } else {
                            $nodeValue = self::fromXml($childElement, $type, $baseNamespace);
                        }
                    }

                    if ($isArray) {
                        $values = $refProperty->getValue($instance);
                        $values[] = $nodeValue;
                        $refProperty->setValue($instance, $values);
                    } else {
                        $refProperty->setValue($instance, $nodeValue);
                    }
                }
            }

            return $instance;
        } catch(\ReflectionException $e) {
            throw new XmlException('Unable to serialize XML element', $e);
        }
    }

    /**
     * @param object $obj
     * @param DOMElement $element
     * @param DOMDocument $document
     */
    public static function toXml($obj, DOMElement $element, DOMDocument $document)
    {
        try {
            $refClass = new ReflectionClass($obj);

            if (self::extendsAbstract($refClass)) {
                $element->setAttribute('xsi:type', $refClass->getShortName());
            }

            $refProperties = $refClass->getProperties();

            foreach ($refProperties as $refProperty) {
                $refProperty->setAccessible(true);
                $annotations = self::getAnnotations($refProperty->getDocComment());

                if (array_key_exists('ElementName', $annotations)) {
                    $propertyName = $annotations['ElementName'];
                    $value = $refProperty->getValue($obj);

                    // Omit null values from the XML
                    if ($value !== null) {
                        if (!is_array($value)) {
                            $values = array($value);
                        } else {
                            $values = $value;
                        }

                        foreach ($values as $value) {
                            $child = $document->createElement($propertyName);

                            if (($value instanceof Nil) && array_key_exists('Nillable', $annotations)) {
                                $child->setAttribute('xsi:nil', 'true');
                            } else if ($value instanceof Enum) {
                                $child->appendChild($document->createTextNode($value->getValue()));
                            } else if (is_object($value)) {
                                self::toXml($value, $child, $document);
                            } else {
                                if (is_bool($value)) {
                                    $value = $value === true ? 'true' : 'false';
                                } else {
                                    $value = (string)$value;
                                }

                                $child->appendChild($document->createTextNode($value));
                            }

                            $element->appendChild($child);
                        }
                    }
                }
            }
        } catch(\ReflectionException $e) {
            throw new XmlException('Unable to convert to XML', $e);
        }
    }

    /**
     * @param DOMElement $element
     * @param string $baseNamespace
     * @return string
     */
    private static function qualifiedClassForType(DOMElement $element, $baseNamespace)
    {
        $name = $element->getAttribute('xsi:type');
        $namespace = '';

        if (($pos = strpos($name, ':')) !== false) {
            list($alias, $name) = explode(':', $name, 2);
            $namespace = (string)$element->getAttribute('xmlns:' . $alias);
        }

        return rtrim($baseNamespace . $namespace, '\\') . '\\' . ucwords($name);
    }

    /**
     * @param string $docblock
     * @return array
     */
    private static function getAnnotations($docblock)
    {
        $annotations = [];

        preg_match_all('/@([a-z]+)( .*)*/i', $docblock, $matches);

        if (isset($matches[1])) {
            foreach ($matches[1] as $idx => $tag) {
                $value = trim($matches[2][$idx]);
                $annotations[$tag] = $value;
            }
        }

        return $annotations;
    }

    /**
     * @param string $typeName
     * @return bool
     */
    private static function isScalar($typeName)
    {
        return in_array($typeName, [
            'string',
            'int',
            'bool',
            'float'
        ], true);
    }

    /**
     * @param ReflectionClass $class
     * @return bool
     */
    private static function extendsAbstract(ReflectionClass $class)
    {
        $abstract = false;

        if ($class->isAbstract()) {
            $abstract = true;
        } else if ($parent = $class->getParentClass()) {
            $abstract = self::extendsAbstract($parent);
        }

        return $abstract;
    }

    /**
     * @param ReflectionClass $class
     * @return bool
     */
    private static function isEnum(ReflectionClass $class)
    {
        $enum = false;

        if ($class->getName() === self::ENUM_BASE_TYPE) {
            $enum = true;
        } else if ($parent = $class->getParentClass()) {
            $enum = self::isEnum($parent);
        }

        return $enum;
    }
}