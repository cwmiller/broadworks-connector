<?php

namespace CWM\BroadWorksConnector\Ocip\Validation;

class LengthException extends ValidationException
{
    /** @var string */
    public $propertyName;

    /** @var int */
    public $actual;

    /** @var int */
    public $expected;

    /**
     * @param string $propertyName
     * @param int $actual
     * @param int $expected
     */
    public function __construct($propertyName, $actual, $expected)
    {
        $this->propertyName = $propertyName;
        $this->actual = $actual;
        $this->expected = $expected;

        parent::__construct(sprintf('Length of field %s must be %d.', $propertyName, $expected));
    }
}