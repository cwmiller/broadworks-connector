<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSharedCallAppearanceAddEndpointRequest14sp2
 *
 * Associate an access device instance to the user's Shared Call Appearance.
 *          The response is either a SuccessResponse or an ErrorResponse.
 *          Replaced by: UserSharedCallAppearanceAddEndpointRequest21 in XS data mode   
 *          Replaced by: UserSharedCallAppearanceAddEndpointRequest22 in AS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see UserSharedCallAppearanceAddEndpointRequest21
 * @see UserSharedCallAppearanceAddEndpointRequest22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:46097","type":"sequence"}]
 */
class UserSharedCallAppearanceAddEndpointRequest14sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46097
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointAdd
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46097
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointAdd|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46097
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName allowOrigination
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46097
     * @var bool|null
     */
    private $allowOrigination = null;

    /**
     * @ElementName allowTermination
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46097
     * @var bool|null
     */
    private $allowTermination = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointAdd
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointAdd $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointAdd $accessDeviceEndpoint)
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


}

