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
        $fields =  array_map(function($propertyName) use ($instance) {
            return [
                'type' => 'field',
                'name' => $propertyName,
                'set' => $this->isFieldSet($instance, $propertyName)
            ];
        }, ReflectionUtils::getPropertyNamesInGroup($instance, $this->getId()));

        $sequences = array_map(function($sequence) use($instance) {
            return [
                'type' => 'sequence',
                'sequence' => $sequence,
                'set' => $this->isSequenceSet($instance, $sequence)
            ];
        }, array_filter($this->getChildren(), function($child) {
            return $child instanceof Sequence;
        }));

        $setMembers = array_filter(array_merge($fields, $sequences), function($member) {
            return $member['set'];
        });

        if ((count($setMembers) === 0) && !$this->isOptional()) {
            throw new ValidationException('Choice not made in group ' . $this->getId(), ValidationException::CHOICE_NOT_MET);
        }

        if (count($setMembers) > 1) {
            throw new ValidationException('Multiple choices made in group ' . $this->getId(), ValidationException::CHOICE_NOT_MET);
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
}