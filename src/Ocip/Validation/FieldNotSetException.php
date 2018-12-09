<?php

namespace CWM\BroadWorksConnector\Ocip\Validation;

class FieldNotSetException extends ValidationException
{
    public $object;

    /** @var string */
    public $fieldName;

    /**
     * @param $object
     * @param string $fieldName
     */
    public function __construct($object, $fieldName)
    {
        $this->object = $object;
        $this->fieldName = $fieldName;

        parent::__construct(sprintf('Field %s is required on %s.', $fieldName, get_class($object)), ValidationException::REQUIREMENT);
    }
}