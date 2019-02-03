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
 * @Groups [{"id":"a7ae3767516578250f020b627d8fe972:107","type":"sequence"}]
 */
class UserVideoAddOnModifyRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group a7ae3767516578250f020b627d8fe972:107
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group a7ae3767516578250f020b627d8fe972:107
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName maxOriginatingCallDelaySeconds
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VideoAddOnMaxOriginatingCallDelaySeconds
     * @Optional
     * @Group a7ae3767516578250f020b627d8fe972:107
     * @var \CWM\BroadWorksConnector\Ocip\Models\VideoAddOnMaxOriginatingCallDelaySeconds|null
     */
    private $maxOriginatingCallDelaySeconds = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify
     * @Nillable
     * @Optional
     * @Group a7ae3767516578250f020b627d8fe972:107
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessDeviceEndpoint = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify|null $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointModify $accessDeviceEndpoint = null)
    {
        if ($accessDeviceEndpoint === null) {
            $this->accessDeviceEndpoint = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        }
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

