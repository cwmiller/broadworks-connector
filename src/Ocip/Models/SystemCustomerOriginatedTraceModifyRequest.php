<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCustomerOriginatedTraceModifyRequest
 *
 * Modify the system level data associated with Customer Originated Trace.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"55636b88804490cf0ead7c9d4f44f28d:73","type":"sequence"}]
 */
class SystemCustomerOriginatedTraceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName screenMaliciousCallers
     * @Type bool
     * @Optional
     * @Group 55636b88804490cf0ead7c9d4f44f28d:73
     * @var bool|null
     */
    private $screenMaliciousCallers = null;

    /**
     * Getter for screenMaliciousCallers
     *
     * @return bool
     */
    public function getScreenMaliciousCallers()
    {
        return $this->screenMaliciousCallers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->screenMaliciousCallers;
    }

    /**
     * Setter for screenMaliciousCallers
     *
     * @param bool $screenMaliciousCallers
     * @return $this
     */
    public function setScreenMaliciousCallers($screenMaliciousCallers)
    {
        $this->screenMaliciousCallers = $screenMaliciousCallers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScreenMaliciousCallers()
    {
        $this->screenMaliciousCallers = null;
        return $this;
    }


}

