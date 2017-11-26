<?php
namespace CWM\BroadWorksConnector\Ocip;

class OcipResponseException extends \RuntimeException
{
    /** @var string|null */
    public $details;

    /**
     * @param string $summary
     * @param int|null $code
     * @param string|null $details
     * @param \Throwable|null $previous
     */
    public function __construct($summary, $code = null, $details = null, \Throwable $previous = null)
    {
        $this->details = $details;

        parent::__construct($summary, $code, $previous);
    }
}