<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSharedCallAppearanceAddEndpointRequest21sp2
 *
 * Associate an access device instance to the user's Shared Call Appearance.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: UserSharedCallAppearanceAddEndpointRequest21sp2.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see UserSharedCallAppearanceAddEndpointRequest21sp2
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:14317","type":"sequence"}]
 */
class UserSharedCallAppearanceAddEndpointRequest21sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:14317
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityEndpointAdd
     * @Group de4d76f01f337fe4694212ec9f771753:14317
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityEndpointAdd|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:14317
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName allowOrigination
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:14317
     * @var bool|null
     */
    private $allowOrigination = null;

    /**
     * @ElementName allowTermination
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:14317
     * @var bool|null
     */
    private $allowTermination = null;

    /**
     * @ElementName allowVideo
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:14317
     * @var bool|null
     */
    private $allowVideo = null;

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
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityEndpointAdd
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityEndpointAdd $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityEndpointAdd $accessDeviceEndpoint)
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
     * Getter for allowOrigination
     *
     * @return bool
     */
    public function getAllowOrigination()
    {
        return $this->allowOrigination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowOrigination;
    }

    /**
     * Setter for allowOrigination
     *
     * @param bool $allowOrigination
     * @return $this
     */
    public function setAllowOrigination($allowOrigination)
    {
        $this->allowOrigination = $allowOrigination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowOrigination()
    {
        $this->allowOrigination = null;
        return $this;
    }

    /**
     * Getter for allowTermination
     *
     * @return bool
     */
    public function getAllowTermination()
    {
        return $this->allowTermination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowTermination;
    }

    /**
     * Setter for allowTermination
     *
     * @param bool $allowTermination
     * @return $this
     */
    public function setAllowTermination($allowTermination)
    {
        $this->allowTermination = $allowTermination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowTermination()
    {
        $this->allowTermination = null;
        return $this;
    }

    /**
     * Getter for allowVideo
     *
     * @return bool
     */
    public function getAllowVideo()
    {
        return $this->allowVideo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowVideo;
    }

    /**
     * Setter for allowVideo
     *
     * @param bool $allowVideo
     * @return $this
     */
    public function setAllowVideo($allowVideo)
    {
        $this->allowVideo = $allowVideo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowVideo()
    {
        $this->allowVideo = null;
        return $this;
    }


}

