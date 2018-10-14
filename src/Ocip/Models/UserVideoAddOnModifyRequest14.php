<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVideoAddOnModifyRequest14
 *
 * Modify the user's Video Add-On service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserVideoAddOnModifyRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName maxOriginatingCallDelaySeconds
     * @var \CWM\BroadWorksConnector\Ocip\Models\VideoAddOnMaxOriginatingCallDelaySeconds|null
     */
    private $maxOriginatingCallDelaySeconds = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\VideoAddOnMaxOriginatingCallDelaySeconds|null
     */
    public function getMaxOriginatingCallDelaySeconds()
    {
        return $this->maxOriginatingCallDelaySeconds;
    }

    /**
     * Setter for maxOriginatingCallDelaySeconds
     *
     * @ElementName maxOriginatingCallDelaySeconds
     * @param \CWM\BroadWorksConnector\Ocip\Models\VideoAddOnMaxOriginatingCallDelaySeconds|null $maxOriginatingCallDelaySeconds
     * @return $this
     */
    public function setMaxOriginatingCallDelaySeconds(\CWM\BroadWorksConnector\Ocip\Models\VideoAddOnMaxOriginatingCallDelaySeconds $maxOriginatingCallDelaySeconds)
    {
        $this->maxOriginatingCallDelaySeconds = $maxOriginatingCallDelaySeconds;
        return $this;
    }

    /**
     * Getter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify $accessDeviceEndpoint)
    {
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        return $this;
    }


}

