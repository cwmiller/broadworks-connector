<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFlexibleSeatingGuestGetResponse
 *
 * Response to UserFlexibleSeatingGuestGetRequest.
 *
 * @see UserFlexibleSeatingGuestGetRequest
 */
class UserFlexibleSeatingGuestGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead20|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName hostUserId
     * @var string|null
     */
    private $hostUserId = null;

    /**
     * @ElementName hostLastName
     * @var string|null
     */
    private $hostLastName = null;

    /**
     * @ElementName hostFirstName
     * @var string|null
     */
    private $hostFirstName = null;

    /**
     * @ElementName hostAssociationDateTime
     * @var string|null
     */
    private $hostAssociationDateTime = null;

    /**
     * @ElementName hostEnforcesAssociationLimit
     * @var bool|null
     */
    private $hostEnforcesAssociationLimit = null;

    /**
     * @ElementName hostAssociationLimitHours
     * @var int|null
     */
    private $hostAssociationLimitHours = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead20|null
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead20|null $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint($accessDeviceEndpoint)
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

    /**
     * Getter for hostLastName
     *
     * @ElementName hostLastName
     * @return string|null
     */
    public function getHostLastName()
    {
        return $this->hostLastName;
    }

    /**
     * Setter for hostLastName
     *
     * @ElementName hostLastName
     * @param string|null $hostLastName
     * @return $this
     */
    public function setHostLastName($hostLastName)
    {
        $this->hostLastName = $hostLastName;
        return $this;
    }

    /**
     * Getter for hostFirstName
     *
     * @ElementName hostFirstName
     * @return string|null
     */
    public function getHostFirstName()
    {
        return $this->hostFirstName;
    }

    /**
     * Setter for hostFirstName
     *
     * @ElementName hostFirstName
     * @param string|null $hostFirstName
     * @return $this
     */
    public function setHostFirstName($hostFirstName)
    {
        $this->hostFirstName = $hostFirstName;
        return $this;
    }

    /**
     * Getter for hostAssociationDateTime
     *
     * @ElementName hostAssociationDateTime
     * @return string|null
     */
    public function getHostAssociationDateTime()
    {
        return $this->hostAssociationDateTime;
    }

    /**
     * Setter for hostAssociationDateTime
     *
     * @ElementName hostAssociationDateTime
     * @param string|null $hostAssociationDateTime
     * @return $this
     */
    public function setHostAssociationDateTime($hostAssociationDateTime)
    {
        $this->hostAssociationDateTime = $hostAssociationDateTime;
        return $this;
    }

    /**
     * Getter for hostEnforcesAssociationLimit
     *
     * @ElementName hostEnforcesAssociationLimit
     * @return bool|null
     */
    public function getHostEnforcesAssociationLimit()
    {
        return $this->hostEnforcesAssociationLimit;
    }

    /**
     * Setter for hostEnforcesAssociationLimit
     *
     * @ElementName hostEnforcesAssociationLimit
     * @param bool|null $hostEnforcesAssociationLimit
     * @return $this
     */
    public function setHostEnforcesAssociationLimit($hostEnforcesAssociationLimit)
    {
        $this->hostEnforcesAssociationLimit = $hostEnforcesAssociationLimit;
        return $this;
    }

    /**
     * Getter for hostAssociationLimitHours
     *
     * @ElementName hostAssociationLimitHours
     * @return int|null
     */
    public function getHostAssociationLimitHours()
    {
        return $this->hostAssociationLimitHours;
    }

    /**
     * Setter for hostAssociationLimitHours
     *
     * @ElementName hostAssociationLimitHours
     * @param int|null $hostAssociationLimitHours
     * @return $this
     */
    public function setHostAssociationLimitHours($hostAssociationLimitHours)
    {
        $this->hostAssociationLimitHours = $hostAssociationLimitHours;
        return $this;
    }


}

