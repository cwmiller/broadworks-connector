<?php

namespace CWM\BroadWorksConnector\Ocip\Validation;

class ValidationException extends \RuntimeException
{
    const INVALID_CONFIGURATION = 0;
    const REQUIREMENT_NOT_MET = 1;
    const CHOICE_NOT_MET = 2;

    public function __construct($message, $code, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}