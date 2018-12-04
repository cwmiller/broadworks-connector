<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGeographicRedundancyPeerSipConnectionMonitoringGetResponse
 *
 * Response to SystemGeographicRedundancyPeerSipConnectionMonitoringGetRequest.
 *         Contains a list of Peer SIP Connection Monitoring system parameters.
 *
 * @see SystemGeographicRedundancyPeerSipConnectionMonitoringGetRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:8925","type":"sequence"}]
 */
class SystemGeographicRedundancyPeerSipConnectionMonitoringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enabled
     * @Type bool
     * @Group 610f84d3e188f0477c3ae1a82ee036da:8925
     * @var bool|null
     */
    private $enabled = null;

    /**
     * @ElementName heartbeatInterval
     * @Type int
     * @Group 610f84d3e188f0477c3ae1a82ee036da:8925
     * @var int|null
     */
    private $heartbeatInterval = null;

    /**
     * @ElementName heartbeatTimeout
     * @Type int
     * @Group 610f84d3e188f0477c3ae1a82ee036da:8925
     * @var int|null
     */
    private $heartbeatTimeout = null;

    /**
     * Getter for enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enabled;
    }

    /**
     * Setter for enabled
     *
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnabled()
    {
        $this->enabled = null;
        return $this;
    }

    /**
     * Getter for heartbeatInterval
     *
     * @return int
     */
    public function getHeartbeatInterval()
    {
        return $this->heartbeatInterval instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->heartbeatInterval;
    }

    /**
     * Setter for heartbeatInterval
     *
     * @param int $heartbeatInterval
     * @return $this
     */
    public function setHeartbeatInterval($heartbeatInterval)
    {
        $this->heartbeatInterval = $heartbeatInterval;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHeartbeatInterval()
    {
        $this->heartbeatInterval = null;
        return $this;
    }

    /**
     * Getter for heartbeatTimeout
     *
     * @return int
     */
    public function getHeartbeatTimeout()
    {
        return $this->heartbeatTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->heartbeatTimeout;
    }

    /**
     * Setter for heartbeatTimeout
     *
     * @param int $heartbeatTimeout
     * @return $this
     */
    public function setHeartbeatTimeout($heartbeatTimeout)
    {
        $this->heartbeatTimeout = $heartbeatTimeout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHeartbeatTimeout()
    {
        $this->heartbeatTimeout = null;
        return $this;
    }


}

