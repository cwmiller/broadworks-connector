<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCustomerOriginatedTraceGetResponse
 *
 * Response to SystemCustomerOriginatedTraceGetRequest.
 */
class SystemCustomerOriginatedTraceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName screenMaliciousCallers
     * @var bool|null
     */
    private $screenMaliciousCallers = null;

    /**
     * Getter for screenMaliciousCallers
     *
     * @ElementName screenMaliciousCallers
     * @return bool|null
     */
    public function getScreenMaliciousCallers()
    {
        return $this->screenMaliciousCallers;
    }

    /**
     * Setter for screenMaliciousCallers
     *
     * @ElementName screenMaliciousCallers
     * @param bool|null $screenMaliciousCallers
     * @return $this
     */
    public function setScreenMaliciousCallers($screenMaliciousCallers)
    {
        $this->screenMaliciousCallers = $screenMaliciousCallers;
        return $this;
    }


}

