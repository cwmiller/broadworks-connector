<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCustomerOriginatedTraceGetResponse
 *
 * Response to SystemCustomerOriginatedTraceGetRequest.
 *
 * @see SystemCustomerOriginatedTraceGetRequest
 */
class SystemCustomerOriginatedTraceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName screenMaliciousCallers
     * @Type bool
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

