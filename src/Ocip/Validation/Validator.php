<?php

namespace CWM\BroadWorksConnector\Ocip\Validation;

use CWM\BroadWorksConnector\ReflectionUtils;
use ReflectionClass;

class Validator
{
    /**
     * @param $instance
     * @return bool
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     * @throws ValidationException
     */
    public static function validate($instance)
    {
        // Validate any groups on the instance
        $groups = self::getGroups($instance);

        foreach ($groups as $group) {
            $group->validate($instance);
        }

        // Validate any properties set to an object instance
        $class = new ReflectionClass($instance);
        foreach ($class->getProperties() as $property) {
            $property->setAccessible(true);
            $value = $property->getValue($instance);
            if (($value !== null) && is_object($value)) {
                self::validate($value);
            }
        }

        return true;
    }

    /**
     * @param object $instance
     * @return Group[]
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     */
    private static function getGroups($instance)
    {
        $annotations = ReflectionUtils::getAnnotations($instance);

        if (!isset($annotations['Groups'])) {
            throw new ConfigurationNotFoundException('No @Groups annotation found on object.');
        }

        return self::fromJson($annotations['Groups']);
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