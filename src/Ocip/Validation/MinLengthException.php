<?php

namespace CWM\BroadWorksConnector\Ocip\Validation;

class MinLengthException extends ValidationException
{
    /** @var string */
    public $propertyName;

    /** @var int */
    public $actual;

    /** @var int */
    public $min;

    /**
     * @param string $propertyName
     * @param int $actual
     * @param int $min
     */
    public function __construct($propertyName, $actual, $min)
    {
        $this->propertyName = $propertyName;
        $this->actual = $actual;
        $this->min = $min;

        parent::__construct(sprintf('Length of field %s must be at least %d.', $propertyName, $min));
    }
}