<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFlexibleSeatingGuestModifyRequest
 *
 * Modify the user level data associated with flexible seating guest.
 * 		accessDeviceEndpoint can only be configured by group or a higher level
 * administrator.
 * 		The request fails if isActive is set to false and the guest is associated to a
 * host.
 * 		The request fails when enableAssociationLimit, associationLimitHours,
 * unlockPhonePINCode are changed when the guest is associated to a host.
 * 		The request fails when accessDeviceEndpoint is set in the request when the
 * guest is associated to a host.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserFlexibleSeatingGuestModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName enableAssociationLimit
     * @var bool|null
     */
    private $enableAssociationLimit = null;

    /**
     * @ElementName associationLimitHours
     * @var int|null
     */
    private $associationLimitHours = null;

    /**
     * @ElementName unlockPhonePINCode
     * @var string|null
     */
    private $unlockPhonePINCode = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointModify|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName hostUserId
     * @var string|null
     */
    private $hostUserId = null;

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
     * Getter for enableAssociationLimit
     *
     * @ElementName enableAssociationLimit
     * @return bool|null
     */
    public function getEnableAssociationLimit()
    {
        return $this->enableAssociationLimit;
    }

    /**
     * Setter for enableAssociationLimit
     *
     * @ElementName enableAssociationLimit
     * @param bool|null $enableAssociationLimit
     * @return $this
     */
    public function setEnableAssociationLimit($enableAssociationLimit)
    {
        $this->enableAssociationLimit = $enableAssociationLimit;
        return $this;
    }

    /**
     * Getter for associationLimitHours
     *
     * @ElementName associationLimitHours
     * @return int|null
     */
    public function getAssociationLimitHours()
    {
        return $this->associationLimitHours;
    }

    /**
     * Setter for associationLimitHours
     *
     * @ElementName associationLimitHours
     * @param int|null $associationLimitHours
     * @return $this
     */
    public function setAssociationLimitHours($associationLimitHours)
    {
        $this->associationLimitHours = $associationLimitHours;
        return $this;
    }

    /**
     * Getter for unlockPhonePINCode
     *
     * @ElementName unlockPhonePINCode
     * @return string|null
     */
    public function getUnlockPhonePINCode()
    {
        return $this->unlockPhonePINCode;
    }

    /**
     * Setter for unlockPhonePINCode
     *
     * @ElementName unlockPhonePINCode
     * @param string|null $unlockPhonePINCode
     * @return $this
     */
    public function setUnlockPhonePINCode($unlockPhonePINCode)
    {
        $this->unlockPhonePINCode = $unlockPhonePINCode;
        return $this;
    }

    /**
     * Getter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointModify|null
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointModify|null $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointModify $accessDeviceEndpoint)
    {
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        return $this;
    }

    /**
     * Getter for hostUserId
     *
     * @ElementName hostUserId
     * @return string|null
     */
    public function getHostUserId()
    {
        return $this->hostUserId;
    }

    /**
     * Setter for hostUserId
     *
     * @ElementName hostUserId
     * @param string|null $hostUserId
     * @return $this
     */
    public function setHostUserId($hostUserId)
    {
        $this->hostUserId = $hostUserId;
        return $this;
    }


}

