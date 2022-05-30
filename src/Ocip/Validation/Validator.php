<?php

namespace CWM\BroadWorksConnector\Ocip\Validation;

use CWM\BroadWorksConnector\Ocip\Nil;
use CWM\BroadWorksConnector\ReflectionUtils;
use MyCLabs\Enum\Enum;
use ReflectionClass;

class Validator
{
    /**
     * Validate instance of object
     *
     * @param $instance
     * @return bool
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     * @throws ValidationException
     * @throws ConfigurationNotFoundException
     */
    public static function validate($instance)
    {
        self::validateGroups($instance);
        self::validateProperties($instance);

        return true;
    }

    /**
     * @param object $instance
     * @return Group[]
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     * @throws ConfigurationNotFoundException
     */
    private static function getGroups($instance)
    {
        $groups = [];

        $ref = new ReflectionClass($instance);

        // A loop is needed to also get the Group annotations on parent classes
        while ($ref != NULL) {
            $annotations = ReflectionUtils::getAnnotations($ref);

            if (!isset($annotations['Groups'])) {
                throw new ConfigurationNotFoundException('No @Groups annotation found on type ' . $ref->getName() . '.');
            }

            $groups = array_merge($groups, self::fromJson($annotations['Groups']));

            if ($ref->getParentClass() !== false) {
                $ref = $ref->getParentClass();
            } else {
                $ref = NULL;
            }
        }

        return $groups;
    }

    /**
     * Finds sequence and choice groups on an object and validates them
     *
     * @param $instance
     * @throws ConfigurationNotFoundException
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     */
    private static function validateGroups($instance)
    {
        $groups = self::getGroups($instance);

        foreach ($groups as $group) {
            $group->validate($instance);
        }
    }

    /**
     * Validates all properties on an object
     *
     * @param $instance
     * @throws ConfigurationNotFoundException
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     */
    private static function validateProperties($instance)
    {
        $class = new ReflectionClass($instance);
        foreach ($class->getProperties() as $property) {
            $property->setAccessible(true);
            $value = $property->getValue($instance);

            // Enums are technically an object, but we should skip over them.
            // They already do their own validation on construction.
            if (is_object($value) && !($value instanceof Enum) && !($value instanceof Nil)) {
                self::validate($value);
            } else if (is_array($value)) {
                // If value is an array, validate each member individually
                foreach ($value as $element) {
                    if (is_object($element) && !($element instanceof Enum) && !($element instanceof Nil)) {
                        self::validate($element);
                    }
                }
            } else {
                self::validatePropertyRestrictions($property, $value);
            }
        }
    }

    /**
     * Validates a property's length, inclusion, and pattern
     *
     * @param \ReflectionProperty $property
     * @param string|int $value
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     */
    private static function validatePropertyRestrictions(\ReflectionProperty $property, $value)
    {
        $annotations = ReflectionUtils::getAnnotations($property);
        foreach ($annotations as $annotationKey => $annotationValue) {
            if ((is_string($value) || is_int($value)) && ($value !== null)) {
                switch ($annotationKey) {
                    case 'Length':
                        $expectedLength = (int)$annotationValue;
                        if (strlen($value) !== $expectedLength) {
                            throw new LengthException($property->getName(), strlen($value), $expectedLength);
                        }
                        break;
                    case 'MinLength':
                        $minLength = (int)$annotationValue;
                        if (strlen($value) < $minLength) {
                            throw new MinLengthException($property->getName(), strlen($value), $minLength);
                        }
                        break;
                    case 'MaxLength':
                        $maxLength = (int)$annotationValue;
                        if (strlen($value) > $maxLength) {
                            throw new MaxLengthException($property->getName(), strlen($value), $maxLength);
                        }
                        break;
                    case 'MinInclusive':
                        $min = (int)$annotationValue;
                        $value = (int)$value;
                        if ($value < $min) {
                            throw new MinInclusiveException($property->getName(), $value, $min);
                        }
                        break;
                    case 'MaxInclusive':
                        $max = (int)$annotationValue;
                        $value = (int)$value;
                        if ($value > $max) {
                            throw new MaxInclusiveException($property->getName(), $value, $max);
                        }
                        break;
                    case 'Pattern':
                        if (!preg_match('/^' . $annotationValue . '$/', $value)) {
                            throw new PatternException($property->getName(), $value, $annotationValue);
                        }
                        break;
                }
            }
        }
    }

    /**
     * @param string $json
     * @return Group[]
     */
    private static function fromJson($json)
    {
        return array_map(function($arr) { return Group::fromArray($arr); }, json_decode($json, true));

    }
}