<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHPBXMobileTerminationGetResponse
 *
 * Response to the SystemHPBXMobileTerminationGetRequest.
 *         Contains the hPBX mobile termination related configuration parameters.
 *
 * @see SystemHPBXMobileTerminationGetRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:9714","type":"sequence"}]
 */
class SystemHPBXMobileTerminationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingPrefix
     * @Type string
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:9714
     * @var string|null
     */
    private $routingPrefix = null;

    /**
     * Getter for routingPrefix
     *
     * @return string
     */
    public function getRoutingPrefix()
    {
        return $this->routingPrefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routingPrefix;
    }

    /**
     * Setter for routingPrefix
     *
     * @param string $routingPrefix
     * @return $this
     */
    public function setRoutingPrefix($routingPrefix)
    {
        $this->routingPrefix = $routingPrefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoutingPrefix()
    {
        $this->routingPrefix = null;
        return $this;
    }


}

