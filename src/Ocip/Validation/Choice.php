<?php

namespace CWM\BroadWorksConnector\Ocip\Validation;

use CWM\BroadWorksConnector\ReflectionUtils;
use ReflectionClass;

class Choice extends Group
{
    /** @var bool */
    private $isOptional;

    /**
     * @return bool
     */
    public function isOptional()
    {
        return $this->isOptional;
    }

    /**
     * @param bool $isOptional
     * @return Choice
     */
    public function setIsOptional($isOptional)
    {
        $this->isOptional = $isOptional;
        return $this;
    }

    /**
     * @param $instance
     * @return bool
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     */
    public function validate($instance)
    {
        $fields = array_map(function($propertyName) use ($instance) {
            return [
                'type' => 'field',
                'name' => $propertyName,
                'optional' => $this->isFieldOptional($instance, $propertyName),
                'set' => $this->isFieldSet($instance, $propertyName)
            ];
        }, ReflectionUtils::getPropertyNamesInGroup($instance, $this->getId()));

        $sequences = array_map(function(Sequence $sequence) use($instance) {
            return [
                'type' => 'sequence',
                'sequence' => $sequence,
                'optional' => false,
                'set' => $this->isSequenceSet($instance, $sequence)
            ];
        }, array_filter($this->getChildren(), function($child) {
            return $child instanceof Sequence;
        }));

        $members = array_merge($fields, $sequences);

        $setMembers = array_filter($members, function($member) {
            return $member['set'];
        });

        $nonOptionalMembers = array_filter($members, function($member) {
            return !$member['optional'];
        });

        if ((count($setMembers) === 0) && (count($nonOptionalMembers) !== 0) && !$this->isOptional()) {
            $options = $this->memberNames($instance, $members);
            throw new ChoiceNotSetException($instance, $options);
        }

        if (count($setMembers) > 1) {
            $options = $this->memberNames($instance, $members);
            throw new InvalidChoiceException($instance, $options);

        }

        return true;
    }

    /**
     * @param $instance
     * @param string $propertyName
     * @return bool
     * @throws \ReflectionException
     */
    private function isFieldSet($instance, $propertyName)
    {
        $class = new ReflectionClass($instance);
        $property = $class->getProperty($propertyName);
        $property->setAccessible(true);

        return $property->getValue($instance) !== null;
    }

    private function isFieldOptional($instance, $propertyName)
    {
        $annotations = ReflectionUtils::getPropertyAnnotations($instance, $propertyName);

        return array_key_exists('Optional', $annotations);
    }

    /**
     * @param $instance
     * @param Sequence $sequence
     * @return bool
     * @throws \InvalidArgumentException
     * @throws \ReflectionException
     */
    private function isSequenceSet($instance, Sequence $sequence)
    {
        $set = false;
        $propertyNames = ReflectionUtils::getPropertyNamesInGroup($instance, $sequence->getId());

        foreach ($propertyNames as $propertyName) {
            if ($this->isFieldSet($instance, $propertyName)) {
                $set = true;
                break;
            }
        }

        return $set;
    }

    /**
     * @param $instance
     * @param array $members
     * @return array
     */
    private function memberNames($instance, $members)
    {
        return array_map(function($member) use ($instance) {
            if ($member['type'] === 'field') {
                return $member['name'];
            } else {
                /** @var Sequence $sequence */
                $sequence = $member['sequence'];
                return ReflectionUtils::getPropertyNamesInGroup($instance, $sequence->getId());
            }

        }, $members);
    }
}