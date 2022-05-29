<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFlexibleSeatingGuestGetResponse22
 *
 * Response to UserFlexibleSeatingGuestGetRequest22.
 *
 * @see UserFlexibleSeatingGuestGetRequest22
 * @Groups [{"id":"43afb2158d313a1d1a148124d7caba1e:420","type":"sequence"}]
 */
class UserFlexibleSeatingGuestGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 43afb2158d313a1d1a148124d7caba1e:420
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName enableAssociationLimit
     * @Type bool
     * @Group 43afb2158d313a1d1a148124d7caba1e:420
     * @var bool|null
     */
    protected $enableAssociationLimit = null;

    /**
     * @ElementName associationLimitHours
     * @Type int
     * @Group 43afb2158d313a1d1a148124d7caba1e:420
     * @MinInclusive 1
     * @MaxInclusive 999
     * @var int|null
     */
    protected $associationLimitHours = null;

    /**
     * @ElementName unlockPhonePINCode
     * @Type string
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:420
     * @MinLength 4
     * @MaxLength 10
     * @var string|null
     */
    protected $unlockPhonePINCode = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead22
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:420
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead22|null
     */
    protected $accessDeviceEndpoint = null;

    /**
     * @ElementName hostUserId
     * @Type string
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:420
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $hostUserId = null;

    /**
     * @ElementName hostLastName
     * @Type string
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:420
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $hostLastName = null;

    /**
     * @ElementName hostFirstName
     * @Type string
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:420
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $hostFirstName = null;

    /**
     * @ElementName hostAssociationDateTime
     * @Type string
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:420
     * @var string|null
     */
    protected $hostAssociationDateTime = null;

    /**
     * @ElementName hostEnforcesAssociationLimit
     * @Type bool
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:420
     * @var bool|null
     */
    protected $hostEnforcesAssociationLimit = null;

    /**
     * @ElementName hostAssociationLimitHours
     * @Type int
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:420
     * @MinInclusive 1
     * @MaxInclusive 999
     * @var int|null
     */
    protected $hostAssociationLimitHours = null;

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
     * @return string
     */
    public function getUnlockPhonePINCode()
    {
        return $this->unlockPhonePINCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unlockPhonePINCode;
    }

    /**
     * Setter for unlockPhonePINCode
     *
     * @param string $unlockPhonePINCode
     * @return $this
     */
    public function setUnlockPhonePINCode($unlockPhonePINCode)
    {
        $this->unlockPhonePINCode = $unlockPhonePINCode;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead22
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead22 $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleContactEndpointRead22 $accessDeviceEndpoint)
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
     * Getter for hostUserId
     *
     * @return string
     */
    public function getHostUserId()
    {
        return $this->hostUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostUserId;
    }

    /**
     * Setter for hostUserId
     *
     * @param string $hostUserId
     * @return $this
     */
    public function setHostUserId($hostUserId)
    {
        $this->hostUserId = $hostUserId;
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

    /**
     * Getter for hostLastName
     *
     * @return string
     */
    public function getHostLastName()
    {
        return $this->hostLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostLastName;
    }

    /**
     * Setter for hostLastName
     *
     * @param string $hostLastName
     * @return $this
     */
    public function setHostLastName($hostLastName)
    {
        $this->hostLastName = $hostLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostLastName()
    {
        $this->hostLastName = null;
        return $this;
    }

    /**
     * Getter for hostFirstName
     *
     * @return string
     */
    public function getHostFirstName()
    {
        return $this->hostFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostFirstName;
    }

    /**
     * Setter for hostFirstName
     *
     * @param string $hostFirstName
     * @return $this
     */
    public function setHostFirstName($hostFirstName)
    {
        $this->hostFirstName = $hostFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostFirstName()
    {
        $this->hostFirstName = null;
        return $this;
    }

    /**
     * Getter for hostAssociationDateTime
     *
     * @return string
     */
    public function getHostAssociationDateTime()
    {
        return $this->hostAssociationDateTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostAssociationDateTime;
    }

    /**
     * Setter for hostAssociationDateTime
     *
     * @param string $hostAssociationDateTime
     * @return $this
     */
    public function setHostAssociationDateTime($hostAssociationDateTime)
    {
        $this->hostAssociationDateTime = $hostAssociationDateTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostAssociationDateTime()
    {
        $this->hostAssociationDateTime = null;
        return $this;
    }

    /**
     * Getter for hostEnforcesAssociationLimit
     *
     * @return bool
     */
    public function getHostEnforcesAssociationLimit()
    {
        return $this->hostEnforcesAssociationLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostEnforcesAssociationLimit;
    }

    /**
     * Setter for hostEnforcesAssociationLimit
     *
     * @param bool $hostEnforcesAssociationLimit
     * @return $this
     */
    public function setHostEnforcesAssociationLimit($hostEnforcesAssociationLimit)
    {
        $this->hostEnforcesAssociationLimit = $hostEnforcesAssociationLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostEnforcesAssociationLimit()
    {
        $this->hostEnforcesAssociationLimit = null;
        return $this;
    }

    /**
     * Getter for hostAssociationLimitHours
     *
     * @return int
     */
    public function getHostAssociationLimitHours()
    {
        return $this->hostAssociationLimitHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostAssociationLimitHours;
    }

    /**
     * Setter for hostAssociationLimitHours
     *
     * @param int $hostAssociationLimitHours
     * @return $this
     */
    public function setHostAssociationLimitHours($hostAssociationLimitHours)
    {
        $this->hostAssociationLimitHours = $hostAssociationLimitHours;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostAssociationLimitHours()
    {
        $this->hostAssociationLimitHours = null;
        return $this;
    }


}

