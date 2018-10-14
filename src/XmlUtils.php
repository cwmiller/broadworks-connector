<?php

namespace CWM\BroadWorksConnector;

use DOMDocument;
use DOMElement;
use MyCLabs\Enum\Enum;
use RuntimeException;
use ReflectionClass;

class XmlUtils
{
    const ENUM_BASE_TYPE = 'MyCLabs\Enum\Enum';

    /**
     * @param DOMElement $element
     * @param string $className
     * @param string $baseNamespace
     * @return object
     * @throws \InvalidArgumentException
     */
    public static function fromXml(DOMElement $element, $className, $baseNamespace)
    {
        $refClass = null;
        $instance = null;

        try {
            $refClass = new ReflectionClass($className);
        } catch(\ReflectionException $e) {
            throw new \InvalidArgumentException('Class ' . $className . ' cannot be found.', $e);
        }

        if ($refClass->isAbstract()) {
            // If abstract, the XML should have a type attribute denoting the concrete type
            $className = self::qualifiedClassForType($element, $baseNamespace);

            try {
                $refClass = new ReflectionClass($className);
            } catch (\ReflectionException $e) {
                throw new \InvalidArgumentException('Class ' . $className . ' cannot be found.', $e);
            }
        }

        if (self::isEnum($refClass)) {
            $docblock = $refClass->getDocComment();
            preg_match('/@ValueType (.*)/', $docblock, $matches);
            if (!isset($matches[1])) {
                throw new RuntimeException('No @ValueType attribute found on enum ' . $refClass->getName());
            }

            $valueType = trim($matches[1]);
            $nodeValue = $element->nodeValue;

            if ($valueType === 'int') {
                $nodeValue = (int)$nodeValue;
            }

            $instance = new $className($nodeValue);
        } else {
            $instance = new $className();
        }

        $childElements = $element->childNodes;
        for ($i = 0; $i < $childElements->length; $i++) {
            $childElement = $childElements->item($i);

            // First try to set the element by seeing if there's an add function (in case it's an array)
            // If not, try set
            $setterName = 'add' . ucwords($childElement->localName);

            if (!$refClass->hasMethod($setterName)) {
                $setterName = 'set' . ucwords($childElement->localName);
            }

            if ($refClass->hasMethod($setterName)) {
                $setter = $refClass->getMethod($setterName);
                $docblock = $setter->getDocComment();
                preg_match('/@param (.*) \$/', $docblock, $matches);
                if (isset($matches[1])) {
                    $types = array_filter(explode('|', $matches[1]), function ($type) {
                        return $type !== 'null';
                    });

                    if (count($types) > 0) {
                        $type = array_pop($types);
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

                            $setter->invoke($instance, $nodeValue);
                        } else {
                            $setter->invoke($instance, self::fromXml($childElement, $type, $baseNamespace));
                        }
                    }
                }
            }
        }

        return $instance;
    }

    /**
     * @param object $obj
     * @param DOMElement $element
     * @param DOMDocument $document
     */
    public static function toXml($obj, DOMElement $element, DOMDocument $document)
    {
        $refClass = null;

        try {
            $refClass = new ReflectionClass($obj);
        } catch (\ReflectionException $e) {
            throw new \RuntimeException('Object ' . get_class($obj) . ' cannot be reflected.', $e);
        }

        // If the object is a descendant of an abstract class, then a type attribute must be included
        if (self::extendsAbstract($refClass)) {
            $element->setAttribute('xsi:type', $refClass->getShortName());
        }

        // Each getter method corresponds to an XML element
        foreach ($refClass->getMethods() as $method) {
            $methodName = $method->getName();
            if (strpos($methodName, 'get') === 0) {
                // The name of the XML element is determined by the @ElementName annotation
                $docblock = $method->getDocComment();
                preg_match('/@ElementName (.*)/', $docblock, $matches);
                if (isset($matches[1])) {
                    $propertyName = trim($matches[1]);
                    $value = $method->invoke($obj);

                    // Omit null values from the XML
                    if ($value !== null) {
                        if (!is_array($value)) {
                            $values = array($value);
                        } else {
                            $values = $value;
                        }

                        foreach ($values as $value) {
                            $child = $document->createElement($propertyName);

                            // The value can either be a primitive or an Enum, in which case we just set the text element.
                            // If the value is neither of those, then it's an object that needs serialized.
                            if (is_object($value)) {
                                if ($value instanceof Enum) {
                                    $child->appendChild($document->createTextNode($value->getValue()));
                                } else {
                                    self::toXml($value, $child, $document);
                                }
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