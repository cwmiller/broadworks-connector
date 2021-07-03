<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGeographicRedundancyPeerSipConnectionMonitoringModifyRequest
 *
 * Modify the list of Peer SIP Connection Monitoring system parameters
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:10537","type":"sequence"}]
 */
class SystemGeographicRedundancyPeerSipConnectionMonitoringModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enabled
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10537
     * @var bool|null
     */
    private $enabled = null;

    /**
     * @ElementName heartbeatInterval
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10537
     * @MinInclusive 10
     * @MaxInclusive 3600000
     * @var int|null
     */
    private $heartbeatInterval = null;

    /**
     * @ElementName heartbeatTimeout
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10537
     * @MinInclusive 10
     * @MaxInclusive 18000000
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

