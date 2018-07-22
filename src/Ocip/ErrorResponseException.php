<?php

namespace CWM\BroadWorksConnector\Ocip;
use CWM\BroadWorksConnector\Ocip\Models\C\ErrorResponse;

/**
 * Thrown when a response from the OCIP API returns an ErrorResponse object
 */
class ErrorResponseException extends \RuntimeException
{
    /**
     * @var string|null
     */
    public $detail = null;

    /**
     * @param ErrorResponse $errorResponse
     */
    public function __construct(ErrorResponse $errorResponse)
    {
        $this->detail = $errorResponse->getDetail();
        $errorCode = $errorResponse->getErrorCode();

        if ($errorCode === null) {
            if (preg_match('/\[Error (\d+)\]/', $errorResponse->getSummary(), $matches)) {
                $errorCode = $matches[1];
            }
        }

        parent::__construct($errorResponse->getSummary(), $errorCode, null);
    }
}