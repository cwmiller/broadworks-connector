<?php

namespace CWM\BroadWorksConnector\Ocip\Validation;

class MaxLengthException extends ValidationException
{
    /** @var string */
    public $propertyName;

    /** @var int */
    public $actual;

    /** @var int */
    public $max;

    /**
     * @param string $propertyName
     * @param int $actual
     * @param int $max
     */
    public function __construct($propertyName, $actual, $max)
    {
        $this->propertyName = $propertyName;
        $this->actual = $actual;
        $this->max = $max;

        parent::__construct(sprintf('Length of field %s can\'t be over %d.', $propertyName, $max));
    }
}