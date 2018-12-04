<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHotelingHostGetResponse14
 *
 * Response to UserHotelingHostGetRequest14.
 *         Replaced by: UserHotelingHostGetResponse14sp4
 *
 * @see UserHotelingHostGetRequest14
 * @see UserHotelingHostGetResponse14sp4
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:36077","type":"sequence"}]
 */
class UserHotelingHostGetResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 1a79c7896cb04feac6eff47a5321756e:36077
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName associationLimitHours
     * @Type int
     * @Group 1a79c7896cb04feac6eff47a5321756e:36077
     * @var int|null
     */
    private $associationLimitHours = null;

    /**
     * @ElementName accessLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HotelingHostAccessLevel
     * @Group 1a79c7896cb04feac6eff47a5321756e:36077
     * @var \CWM\BroadWorksConnector\Ocip\Models\HotelingHostAccessLevel|null
     */
    private $accessLevel = null;

    /**
     * @ElementName guestLastName
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:36077
     * @var string|null
     */
    private $guestLastName = null;

    /**
     * @ElementName guestFirstName
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:36077
     * @var string|null
     */
    private $guestFirstName = null;

    /**
     * @ElementName guestPhoneNumber
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:36077
     * @var string|null
     */
    private $guestPhoneNumber = null;

    /**
     * @ElementName guestExtension
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:36077
     * @var string|null
     */
    private $guestExtension = null;

    /**
     * @ElementName guestLocationDialingCode
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:36077
     * @var string|null
     */
    private $guestLocationDialingCode = null;

    /**
     * @ElementName guestAssociationDateTime
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:36077
     * @var string|null
     */
    private $guestAssociationDateTime = null;

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
     * Getter for accessLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HotelingHostAccessLevel
     */
    public function getAccessLevel()
    {
        return $this->accessLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessLevel;
    }

    /**
     * Setter for accessLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HotelingHostAccessLevel $accessLevel
     * @return $this
     */
    public function setAccessLevel(\CWM\BroadWorksConnector\Ocip\Models\HotelingHostAccessLevel $accessLevel)
    {
        $this->accessLevel = $accessLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessLevel()
    {
        $this->accessLevel = null;
        return $this;
    }

    /**
     * Getter for guestLastName
     *
     * @return string
     */
    public function getGuestLastName()
    {
        return $this->guestLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->guestLastName;
    }

    /**
     * Setter for guestLastName
     *
     * @param string $guestLastName
     * @return $this
     */
    public function setGuestLastName($guestLastName)
    {
        $this->guestLastName = $guestLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGuestLastName()
    {
        $this->guestLastName = null;
        return $this;
    }

    /**
     * Getter for guestFirstName
     *
     * @return string
     */
    public function getGuestFirstName()
    {
        return $this->guestFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->guestFirstName;
    }

    /**
     * Setter for guestFirstName
     *
     * @param string $guestFirstName
     * @return $this
     */
    public function setGuestFirstName($guestFirstName)
    {
        $this->guestFirstName = $guestFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGuestFirstName()
    {
        $this->guestFirstName = null;
        return $this;
    }

    /**
     * Getter for guestPhoneNumber
     *
     * @return string
     */
    public function getGuestPhoneNumber()
    {
        return $this->guestPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->guestPhoneNumber;
    }

    /**
     * Setter for guestPhoneNumber
     *
     * @param string $guestPhoneNumber
     * @return $this
     */
    public function setGuestPhoneNumber($guestPhoneNumber)
    {
        $this->guestPhoneNumber = $guestPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGuestPhoneNumber()
    {
        $this->guestPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for guestExtension
     *
     * @return string
     */
    public function getGuestExtension()
    {
        return $this->guestExtension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->guestExtension;
    }

    /**
     * Setter for guestExtension
     *
     * @param string $guestExtension
     * @return $this
     */
    public function setGuestExtension($guestExtension)
    {
        $this->guestExtension = $guestExtension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGuestExtension()
    {
        $this->guestExtension = null;
        return $this;
    }

    /**
     * Getter for guestLocationDialingCode
     *
     * @return string
     */
    public function getGuestLocationDialingCode()
    {
        return $this->guestLocationDialingCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->guestLocationDialingCode;
    }

    /**
     * Setter for guestLocationDialingCode
     *
     * @param string $guestLocationDialingCode
     * @return $this
     */
    public function setGuestLocationDialingCode($guestLocationDialingCode)
    {
        $this->guestLocationDialingCode = $guestLocationDialingCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGuestLocationDialingCode()
    {
        $this->guestLocationDialingCode = null;
        return $this;
    }

    /**
     * Getter for guestAssociationDateTime
     *
     * @return string
     */
    public function getGuestAssociationDateTime()
    {
        return $this->guestAssociationDateTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->guestAssociationDateTime;
    }

    /**
     * Setter for guestAssociationDateTime
     *
     * @param string $guestAssociationDateTime
     * @return $this
     */
    public function setGuestAssociationDateTime($guestAssociationDateTime)
    {
        $this->guestAssociationDateTime = $guestAssociationDateTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGuestAssociationDateTime()
    {
        $this->guestAssociationDateTime = null;
        return $this;
    }


}

