<?php

namespace CWM\BroadWorksConnector\Ocip\Validation;

class MinInclusiveException extends ValidationException
{
    /** @var string */
    public $propertyName;

    /** @var int */
    public $value;

    /** @var int */
    public $min;

    /**
     * @param string $propertyName
     * @param int $value
     * @param int $min
     */
    public function __construct($propertyName, $value, $min)
    {
        $this->propertyName = $propertyName;
        $this->value = $value;
        $this->min = $min;

        parent::__construct(sprintf('Value of field %s can\'t be less than %d.', $propertyName, $min));
    }
}