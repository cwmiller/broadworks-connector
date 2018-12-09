<?php

namespace CWM\BroadWorksConnector\Ocip\Validation;

use CWM\BroadWorksConnector\ReflectionUtils;
use ReflectionClass;

class Sequence extends Group
{
    /**
     * @param $instance
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     */
    public function validate($instance)
    {
        $class = new ReflectionClass($instance);

        // Retrieve all property names in the object that are part of this group.
        $propertyNames = ReflectionUtils::getPropertyNamesInGroup($instance, $this->getId());

        // Exclude any properties that are marked as Optional.
        $requiredPropertyNames = array_filter($propertyNames, function($propertyName) use ($class) {
            $property = $class->getProperty($propertyName);
            $memberAnnotations = ReflectionUtils::getAnnotations($property);

            return !array_key_exists('Optional', $memberAnnotations);
        });

        // Check if required properties are set
        foreach ($requiredPropertyNames as $requiredPropertyName) {
            $property = $class->getProperty($requiredPropertyName);
            $property->setAccessible(true);
            $value = $property->getValue($instance);

            if ($value === null) {
                throw new FieldNotSetException($instance, $requiredPropertyName);
            }
        }

        // Validate any child groups
        foreach ($this->getChildren() as $child) {
            $child->validate($instance);
        }
    }
}