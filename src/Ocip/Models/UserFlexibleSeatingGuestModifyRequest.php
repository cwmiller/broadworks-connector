<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFlexibleSeatingGuestModifyRequest
 *
 * Modify the user level data associated with flexible seating guest.
 *         accessDeviceEndpoint can only be configured by group or a higher level administrator.
 *         The request fails if isActive is set to false and the guest is associated to a host.
 *         The request fails when enableAssociationLimit, associationLimitHours, unlockPhonePINCode are changed when the guest is associated to a host.
 *         The request fails when accessDeviceEndpoint is set in the request when the guest is associated to a host.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"43afb2158d313a1d1a148124d7caba1e:525","type":"sequence"}]
 */
class UserFlexibleSeatingGuestModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 43afb2158d313a1d1a148124d7caba1e:525
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:525
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName enableAssociationLimit
     * @Type bool
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:525
     * @var bool|null
     */
    private $enableAssociationLimit = null;

    /**
     * @ElementName associationLimitHours
     * @Type int
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:525
     * @var int|null
     */
    private $associationLimitHours = null;

    /**
     * @ElementName unlockPhonePINCode
     * @Type string
     * @Nillable
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:525
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $unlockPhonePINCode = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointModify
     * @Nillable
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:525
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointModify|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName hostUserId
     * @Type string
     * @Nillable
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:525
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $hostUserId = null;

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
     * Getter for enableAssociationLimit
     *
     * @return bool
     */
    public function getEnableAssociationLimit()
    {
        return $this->enableAssociationLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAssociationLimit;
    }

    /**
     * Setter for enableAssociationLimit
     *
     * @param bool $enableAssociationLimit
     * @return $this
     */
    public function setEnableAssociationLimit($enableAssociationLimit)
    {
        $this->enableAssociationLimit = $enableAssociationLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAssociationLimit()
    {
        $this->enableAssociationLimit = null;
        return $this;
    }

    /**
     * Getter for associationLimitHours
     *
     * @return int
     */
    public function getAssociationLimitHours()
    {
        return $this->associationLimitHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->associationLimitHours;
    }

    /**
     * Setter for associationLimitHours
     *
     * @param int $associationLimitHours
     * @return $this
     */
    public function setAssociationLimitHours($associationLimitHours)
    {
        $this->associationLimitHours = $associationLimitHours;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssociationLimitHours()
    {
        $this->associationLimitHours = null;
        return $this;
    }

    /**
     * Getter for unlockPhonePINCode
     *
     * @return string|null
     */
    public function getUnlockPhonePINCode()
    {
        return $this->unlockPhonePINCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unlockPhonePINCode;
    }

    /**
     * Setter for unlockPhonePINCode
     *
     * @param string|null $unlockPhonePINCode
     * @return $this
     */
    public function setUnlockPhonePINCode($unlockPhonePINCode = null)
    {
        if ($unlockPhonePINCode === null) {
            $this->unlockPhonePINCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->unlockPhonePINCode = $unlockPhonePINCode;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnlockPhonePINCode()
    {
        $this->unlockPhonePINCode = null;
        return $this;
    }

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointModify|null
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointModify|null $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointModify $accessDeviceEndpoint = null)
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

    /**
     * Getter for hostUserId
     *
     * @return string|null
     */
    public function getHostUserId()
    {
        return $this->hostUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostUserId;
    }

    /**
     * Setter for hostUserId
     *
     * @param string|null $hostUserId
     * @return $this
     */
    public function setHostUserId($hostUserId = null)
    {
        if ($hostUserId === null) {
            $this->hostUserId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->hostUserId = $hostUserId;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostUserId()
    {
        $this->hostUserId = null;
        return $this;
    }


}

