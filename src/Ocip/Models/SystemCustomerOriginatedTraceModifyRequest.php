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
 * @Groups [{"id":"4b879060a029bc884d4ec2c341a2783f:73","type":"sequence"}]
 */
class SystemCustomerOriginatedTraceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName screenMaliciousCallers
     * @Type bool
     * @Optional
     * @Group 4b879060a029bc884d4ec2c341a2783f:73
     * @var bool|null
     */
    protected $screenMaliciousCallers = null;

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

