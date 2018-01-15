<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGeographicRedundancyPeerSipConnectionMonitoringGetResponse
 *
 * Response to SystemGeographicRedundancyPeerSipConnectionMonitoringGetRequest.
 *         Contains a list of Peer SIP Connection Monitoring system parameters.
 */
class SystemGeographicRedundancyPeerSipConnectionMonitoringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enabled
     * @var bool|null
     */
    private $enabled = null;

    /**
     * @ElementName heartbeatInterval
     * @var int|null
     */
    private $heartbeatInterval = null;

    /**
     * @ElementName heartbeatTimeout
     * @var int|null
     */
    private $heartbeatTimeout = null;

    /**
     * Getter for enabled
     *
     * @ElementName enabled
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Setter for enabled
     *
     * @ElementName enabled
     * @param bool|null $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Getter for heartbeatInterval
     *
     * @ElementName heartbeatInterval
     * @return int|null
     */
    public function getHeartbeatInterval()
    {
        return $this->heartbeatInterval;
    }

    /**
     * Setter for heartbeatInterval
     *
     * @ElementName heartbeatInterval
     * @param int|null $heartbeatInterval
     * @return $this
     */
    public function setHeartbeatInterval($heartbeatInterval)
    {
        $this->heartbeatInterval = $heartbeatInterval;
        return $this;
    }

    /**
     * Getter for heartbeatTimeout
     *
     * @ElementName heartbeatTimeout
     * @return int|null
     */
    public function getHeartbeatTimeout()
    {
        return $this->heartbeatTimeout;
    }

    /**
     * Setter for heartbeatTimeout
     *
     * @ElementName heartbeatTimeout
     * @param int|null $heartbeatTimeout
     * @return $this
     */
    public function setHeartbeatTimeout($heartbeatTimeout)
    {
        $this->heartbeatTimeout = $heartbeatTimeout;
        return $this;
    }


}

