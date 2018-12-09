<?php

namespace CWM\BroadWorksConnector\Ocip\Validation;

abstract class ValidationException extends \RuntimeException
{
    const REQUIREMENT = 0;
    const CHOICE = 1;
}