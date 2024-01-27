<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSharedCallAppearanceModifyEndpointRequest
 *
 * Associate/Disassociate an access device instance to the user's Shared Call Appearance.
 *          
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           useHotline
 *           hotlineContact
 *          
 *          The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4e9808afa6161bba01df39d17a849c79:183","type":"sequence"}]
 */
class UserSharedCallAppearanceModifyEndpointRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 4e9808afa6161bba01df39d17a849c79:183
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointKey
     * @Group 4e9808afa6161bba01df39d17a849c79:183
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointKey|null
     */
    protected $accessDeviceEndpoint = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 4e9808afa6161bba01df39d17a849c79:183
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName allowOrigination
     * @Type bool
     * @Optional
     * @Group 4e9808afa6161bba01df39d17a849c79:183
     * @var bool|null
     */
    protected $allowOrigination = null;

    /**
     * @ElementName allowTermination
     * @Type bool
     * @Optional
     * @Group 4e9808afa6161bba01df39d17a849c79:183
     * @var bool|null
     */
    protected $allowTermination = null;

    /**
     * @ElementName useHotline
     * @Type bool
     * @Optional
     * @Group 4e9808afa6161bba01df39d17a849c79:183
     * @var bool|null
     */
    protected $useHotline = null;

    /**
     * @ElementName hotlineContact
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4e9808afa6161bba01df39d17a849c79:183
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $hotlineContact = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointKey
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointKey $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointKey $accessDeviceEndpoint)
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
     * Getter for useHotline
     *
     * @return bool
     */
    public function getUseHotline()
    {
        return $this->useHotline instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useHotline;
    }

    /**
     * Setter for useHotline
     *
     * @param bool $useHotline
     * @return $this
     */
    public function setUseHotline($useHotline)
    {
        $this->useHotline = $useHotline;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseHotline()
    {
        $this->useHotline = null;
        return $this;
    }

    /**
     * Getter for hotlineContact
     *
     * @return string|null
     */
    public function getHotlineContact()
    {
        return $this->hotlineContact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hotlineContact;
    }

    /**
     * Setter for hotlineContact
     *
     * @param string|null $hotlineContact
     * @return $this
     */
    public function setHotlineContact($hotlineContact = null)
    {
        if ($hotlineContact === null) {
            $this->hotlineContact = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->hotlineContact = $hotlineContact;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHotlineContact()
    {
        $this->hotlineContact = null;
        return $this;
    }
}

