<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVideoAddOnGetResponse19
 *
 * Response to the UserVideoAddOnGetRequest19.
 *
 * @see UserVideoAddOnGetRequest19
 * @Groups [{"id":"578e8f783de3e881008912f5d1277f4e:56","type":"sequence"}]
 */
class UserVideoAddOnGetResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 578e8f783de3e881008912f5d1277f4e:56
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName maxOriginatingCallDelaySeconds
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VideoAddOnMaxOriginatingCallDelaySeconds
     * @Group 578e8f783de3e881008912f5d1277f4e:56
     * @var \CWM\BroadWorksConnector\Ocip\Models\VideoAddOnMaxOriginatingCallDelaySeconds|null
     */
    private $maxOriginatingCallDelaySeconds = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead
     * @Optional
     * @Group 578e8f783de3e881008912f5d1277f4e:56
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for maxOriginatingCallDelaySeconds
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VideoAddOnMaxOriginatingCallDelaySeconds
     */
    public function getMaxOriginatingCallDelaySeconds()
    {
        return $this->maxOriginatingCallDelaySeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxOriginatingCallDelaySeconds;
    }

    /**
     * Setter for maxOriginatingCallDelaySeconds
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VideoAddOnMaxOriginatingCallDelaySeconds $maxOriginatingCallDelaySeconds
     * @return $this
     */
    public function setMaxOriginatingCallDelaySeconds(\CWM\BroadWorksConnector\Ocip\Models\VideoAddOnMaxOriginatingCallDelaySeconds $maxOriginatingCallDelaySeconds)
    {
        $this->maxOriginatingCallDelaySeconds = $maxOriginatingCallDelaySeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxOriginatingCallDelaySeconds()
    {
        $this->maxOriginatingCallDelaySeconds = null;
        return $this;
    }

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointWithPortNumberRead $accessDeviceEndpoint)
    {
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceEndpoint()
    {
        $this->accessDeviceEndpoint = null;
        return $this;
    }


}

