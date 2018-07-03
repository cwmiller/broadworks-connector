<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHPBXMobileTerminationGetResponse
 *
 * Response to the SystemHPBXMobileTerminationGetRequest.
 *         Contains the hPBX mobile termination related configuration parameters.
 *
 * @see SystemHPBXMobileTerminationGetRequest
 */
class SystemHPBXMobileTerminationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingPrefix
     * @var string|null
     */
    private $routingPrefix = null;

    /**
     * Getter for routingPrefix
     *
     * @ElementName routingPrefix
     * @return string|null
     */
    public function getRoutingPrefix()
    {
        return $this->routingPrefix;
    }

    /**
     * Setter for routingPrefix
     *
     * @ElementName routingPrefix
     * @param string|null $routingPrefix
     * @return $this
     */
    public function setRoutingPrefix($routingPrefix)
    {
        $this->routingPrefix = $routingPrefix;
        return $this;
    }


}

