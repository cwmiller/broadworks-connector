<?php

namespace CWM\BroadWorksConnector;

use Throwable;

class XmlException extends \RuntimeException
{
    public function __construct($message = "", Throwable $previous = null)
    {
        parent::__construct($message, null, $previous);
    }
}