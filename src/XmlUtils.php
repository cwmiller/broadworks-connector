<?php

namespace CWM\BroadWorksConnector;

use DOMDocument;
use DOMElement;
use ReflectionClass;

class XmlUtils
{
    /**
     * @param DOMElement $element
     * @param string $className
     * @param string $baseNamespace
     * @return object
     */
    public static function fromXml(DOMElement $element, $className, $baseNamespace)
    {
        $refClass = new ReflectionClass($className);
        $class = null;

        if ($refClass->isAbstract()) {
            // If abstract, the XML should have a type attribute denoted the concrete type
            $className = self::qualifiedClassForType($element, $baseNamespace);
            $refClass = new ReflectionClass($className);
        }

        $class = new $className();

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
                            $setter->invoke($class, $childElement->nodeValue);
                        } else {
                            $setter->invoke($class, self::fromXml($childElement, $type, $baseNamespace));
                        }
                    }
                }
            }
        }

        return $class;
    }

    /**
     * @param object $obj
     * @param DOMElement $element
     * @param DOMDocument $document
     */
    public static function toXml($obj, DOMElement $element, DOMDocument $document)
    {
        $ref = new ReflectionClass($obj);

        if (self::extendsAbstract($ref)) {
            $element->setAttribute('xsi:type', $ref->getShortName());
        }

        foreach ($ref->getMethods() as $method) {
            $methodName = $method->getName();
            if (strpos($methodName, 'get') === 0) {
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

                            if (is_object($value)) {
                                self::toXml($value, $child, $document);
                            } else {
                                if (is_bool($value)) {
                                    $value = $value === true ? 'true' : 'false';
                                } else {
                                    $value = (string)$value;
                                }

                                $child->textContent = $value;
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
    public static function qualifiedClassForType(DOMElement $element, $baseNamespace)
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
}