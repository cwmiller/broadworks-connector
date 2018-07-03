<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVideoAddOnGetResponse14
 *
 * Response to the UserVideoAddOnGetRequest14.
 *
 * @see UserVideoAddOnGetRequest14
 */
class UserVideoAddOnGetResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName maxOriginatingCallDelaySeconds
     * @var int|null
     */
    private $maxOriginatingCallDelaySeconds = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for maxOriginatingCallDelaySeconds
     *
     * @ElementName maxOriginatingCallDelaySeconds
     * @return int|null
     */
    public function getMaxOriginatingCallDelaySeconds()
    {
        return $this->maxOriginatingCallDelaySeconds;
    }

    /**
     * Setter for maxOriginatingCallDelaySeconds
     *
     * @ElementName maxOriginatingCallDelaySeconds
     * @param int|null $maxOriginatingCallDelaySeconds
     * @return $this
     */
    public function setMaxOriginatingCallDelaySeconds($maxOriginatingCallDelaySeconds)
    {
        $this->maxOriginatingCallDelaySeconds = $maxOriginatingCallDelaySeconds;
        return $this;
    }

    /**
     * Getter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14|null
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14|null $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint($accessDeviceEndpoint)
    {
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        return $this;
    }


}

