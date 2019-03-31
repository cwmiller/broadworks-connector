<?php

namespace CWM\BroadWorksConnector\Ocip\Validation;

class PatternException extends ValidationException
{
    /** @var string */
    public $propertyName;

    /** @var string */
    public $actual;

    /** @var string */
    public $pattern;

    /**
     * @param string $propertyName
     * @param string $actual
     * @param string $pattern
     */
    public function __construct($propertyName, $actual, $pattern)
    {
        $this->propertyName = $propertyName;
        $this->actual = $actual;
        $this->pattern = $pattern;

        parent::__construct(sprintf('Value of field %s must match pattern %s.', $propertyName, $pattern));
    }
}