<?php

namespace CWM\BroadWorksConnector;

use CWM\BroadWorksConnector\Ocip\Nil;
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

            if (self::isEnum($refClass)) {
                $annotations = self::getAnnotations($refClass->getDocComment());

                if (!array_key_exists('ValueType', $annotations)) {
                    throw new RuntimeException('No @ValueType attribute found on enum ' . $refClass->getName());
                }

                $valueType = $annotations['ValueType'];
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
                    $annotations = self::getAnnotations($setter->getDocComment());

                    var_dump($annotations);

                    if (array_key_exists('param', $annotations)) {
                        $types = array_filter(explode('|', $annotations['param']), function ($type) {
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
            $ref = new ReflectionClass($obj);

            if (self::extendsAbstract($ref)) {
                $element->setAttribute('xsi:type', $ref->getShortName());
            }

            foreach ($ref->getMethods() as $method) {
                $methodName = $method->getName();
                if (strpos($methodName, 'get') === 0) {
                    $annotations = self::getAnnotations($method->getDocComment());

                    if (array_key_exists('ElementName', $annotations)) {
                        $propertyName = $annotations['ElementName'];
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