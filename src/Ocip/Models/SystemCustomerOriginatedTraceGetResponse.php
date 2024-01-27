<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCustomerOriginatedTraceGetResponse
 *
 * Response to SystemCustomerOriginatedTraceGetRequest.
 *
 * @see SystemCustomerOriginatedTraceGetRequest
 * @Groups [{"id":"4b879060a029bc884d4ec2c341a2783f:57","type":"sequence"}]
 */
class SystemCustomerOriginatedTraceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName screenMaliciousCallers
     * @Type bool
     * @Group 4b879060a029bc884d4ec2c341a2783f:57
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

