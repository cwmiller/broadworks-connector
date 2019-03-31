<?php

namespace CWM\BroadWorksConnector\Ocip\Validation;

class MaxInclusiveException extends ValidationException
{
    /** @var string */
    public $propertyName;

    /** @var int */
    public $value;

    /** @var int */
    public $max;

    /**
     * @param string $propertyName
     * @param int $value
     * @param int $max
     */
    public function __construct($propertyName, $value, $max)
    {
        $this->propertyName = $propertyName;
        $this->value = $value;
        $this->max = $max;

        parent::__construct(sprintf('Value of field %s can\'t be greater than %d.', $propertyName, $max));
    }
}