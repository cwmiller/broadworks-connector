<?php

namespace CWM\BroadWorksConnector;

use InvalidArgumentException;
use ReflectionClass;
use ReflectionException;
use ReflectionProperty;

abstract class ReflectionUtils
{
    /**
     * @param $object
     * @return string[]
     * @throws InvalidArgumentException
     * @throws \ReflectionException
     */
    public static function getAnnotations($object)
    {
        $object = self::getReflectionObject($object);
        $annotations = [];

        preg_match_all('/@([a-z]+)( .*)*/i', $object->getDocComment(), $matches);

        if (isset($matches[1])) {
            foreach ($matches[1] as $idx => $tag) {
                $value = trim($matches[2][$idx]);
                $annotations[$tag] = $value;
            }
        }

        return $annotations;
    }

    /**
     * @param $object
     * @param string $propertyName
     * @return string[]
     * @throws InvalidArgumentException
     * @throws ReflectionException
     */
    public static function getPropertyAnnotations($object, $propertyName)
    {
        $object = self::getReflectionObject($object);
        $property = null;

        try {
            $property = $object->getProperty($propertyName);
        } catch(ReflectionException $e) {
            throw new InvalidArgumentException('Unknown property: ' . $propertyName);
        }

        return self::getAnnotations($property);
    }

    /**
     * @param $object
     * @param string $groupId
     * @return string[]
     * @throws InvalidArgumentException
     * @throws \ReflectionException
     */
    public static function getPropertyNamesInGroup($object, $groupId)
    {
        $object = self::getReflectionObject($object);
        $propertyNames = [];

        foreach ($object->getProperties() as $property) {
            $annotations = self::getAnnotations($property);

            if (isset($annotations['Group']) && $annotations['Group'] === $groupId) {
                $propertyNames[] = $property->getName();
            }
        }

        return $propertyNames;
    }

    /**
     * @param $object
     * @return ReflectionClass
     * @throws InvalidArgumentException
     * @throws \ReflectionException
     */
    private static function getReflectionObject($object)
    {
        if (!(($object instanceof ReflectionClass) || ($object instanceof ReflectionProperty))) {
            if (!is_object($object)) {
                throw new InvalidArgumentException('Argument is not an object.');
            }

            $object = new ReflectionClass($object);
        }

        return $object;
    }
}