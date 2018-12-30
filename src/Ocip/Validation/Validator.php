<?php

namespace CWM\BroadWorksConnector\Ocip\Validation;

use CWM\BroadWorksConnector\Ocip\Nil;
use CWM\BroadWorksConnector\ReflectionUtils;
use MyCLabs\Enum\Enum;
use ReflectionClass;

class Validator
{
    /**
     * @param $instance
     * @return bool
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     * @throws ValidationException
     * @throws ConfigurationNotFoundException
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

            // Enums are technically an object, but we should skip over them.
            // They already do their own validation on construction.
            if (is_object($value) && !($value instanceof Enum) && !($value instanceof Nil)) {
                self::validate($value);
            } else if (is_array($value)) {
                foreach ($value as $element) {
                    if (is_object($element) && !($element instanceof Enum) && !($element instanceof Nil)) {
                        self::validate($element);
                    }
                }
            }
        }

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