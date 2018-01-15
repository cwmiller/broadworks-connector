<?php

namespace CWM\BroadWorksConnector\Ocip;

/**
 * Thrown when a response from the OCIP API has unexpected contents.
 */
class OcipLoginException extends \RuntimeException
{

    /**
     * @param string $message
     * @param \Throwable|null $previous
     */
    public function __construct($message, \Throwable $previous = null)
    {
        parent::__construct($message, NULL, $previous);
    }
}