<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHotelingHostGetResponse17
 *
 * Response to UserHotelingHostGetRequest17.
 *
 * @see UserHotelingHostGetRequest17
 */
class UserHotelingHostGetResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName enforceAssociationLimit
     * @var bool|null
     */
    private $enforceAssociationLimit = null;

    /**
     * @ElementName associationLimitHours
     * @var int|null
     */
    private $associationLimitHours = null;

    /**
     * @ElementName accessLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\HotelingHostAccessLevel|null
     */
    private $accessLevel = null;

    /**
     * @ElementName guestLastName
     * @var string|null
     */
    private $guestLastName = null;

    /**
     * @ElementName guestFirstName
     * @var string|null
     */
    private $guestFirstName = null;

    /**
     * @ElementName guestPhoneNumber
     * @var string|null
     */
    private $guestPhoneNumber = null;

    /**
     * @ElementName guestExtension
     * @var string|null
     */
    private $guestExtension = null;

    /**
     * @ElementName guestLocationDialingCode
     * @var string|null
     */
    private $guestLocationDialingCode = null;

    /**
     * @ElementName guestAssociationDateTime
     * @var string|null
     */
    private $guestAssociationDateTime = null;

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
     * Getter for enforceAssociationLimit
     *
     * @ElementName enforceAssociationLimit
     * @return bool|null
     */
    public function getEnforceAssociationLimit()
    {
        return $this->enforceAssociationLimit;
    }

    /**
     * Setter for enforceAssociationLimit
     *
     * @ElementName enforceAssociationLimit
     * @param bool|null $enforceAssociationLimit
     * @return $this
     */
    public function setEnforceAssociationLimit($enforceAssociationLimit)
    {
        $this->enforceAssociationLimit = $enforceAssociationLimit;
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
     * Getter for accessLevel
     *
     * @ElementName accessLevel
     * @return \CWM\BroadWorksConnector\Ocip\Models\HotelingHostAccessLevel|null
     */
    public function getAccessLevel()
    {
        return $this->accessLevel;
    }

    /**
     * Setter for accessLevel
     *
     * @ElementName accessLevel
     * @param \CWM\BroadWorksConnector\Ocip\Models\HotelingHostAccessLevel|null $accessLevel
     * @return $this
     */
    public function setAccessLevel(\CWM\BroadWorksConnector\Ocip\Models\HotelingHostAccessLevel $accessLevel)
    {
        $this->accessLevel = $accessLevel;
        return $this;
    }

    /**
     * Getter for guestLastName
     *
     * @ElementName guestLastName
     * @return string|null
     */
    public function getGuestLastName()
    {
        return $this->guestLastName;
    }

    /**
     * Setter for guestLastName
     *
     * @ElementName guestLastName
     * @param string|null $guestLastName
     * @return $this
     */
    public function setGuestLastName($guestLastName)
    {
        $this->guestLastName = $guestLastName;
        return $this;
    }

    /**
     * Getter for guestFirstName
     *
     * @ElementName guestFirstName
     * @return string|null
     */
    public function getGuestFirstName()
    {
        return $this->guestFirstName;
    }

    /**
     * Setter for guestFirstName
     *
     * @ElementName guestFirstName
     * @param string|null $guestFirstName
     * @return $this
     */
    public function setGuestFirstName($guestFirstName)
    {
        $this->guestFirstName = $guestFirstName;
        return $this;
    }

    /**
     * Getter for guestPhoneNumber
     *
     * @ElementName guestPhoneNumber
     * @return string|null
     */
    public function getGuestPhoneNumber()
    {
        return $this->guestPhoneNumber;
    }

    /**
     * Setter for guestPhoneNumber
     *
     * @ElementName guestPhoneNumber
     * @param string|null $guestPhoneNumber
     * @return $this
     */
    public function setGuestPhoneNumber($guestPhoneNumber)
    {
        $this->guestPhoneNumber = $guestPhoneNumber;
        return $this;
    }

    /**
     * Getter for guestExtension
     *
     * @ElementName guestExtension
     * @return string|null
     */
    public function getGuestExtension()
    {
        return $this->guestExtension;
    }

    /**
     * Setter for guestExtension
     *
     * @ElementName guestExtension
     * @param string|null $guestExtension
     * @return $this
     */
    public function setGuestExtension($guestExtension)
    {
        $this->guestExtension = $guestExtension;
        return $this;
    }

    /**
     * Getter for guestLocationDialingCode
     *
     * @ElementName guestLocationDialingCode
     * @return string|null
     */
    public function getGuestLocationDialingCode()
    {
        return $this->guestLocationDialingCode;
    }

    /**
     * Setter for guestLocationDialingCode
     *
     * @ElementName guestLocationDialingCode
     * @param string|null $guestLocationDialingCode
     * @return $this
     */
    public function setGuestLocationDialingCode($guestLocationDialingCode)
    {
        $this->guestLocationDialingCode = $guestLocationDialingCode;
        return $this;
    }

    /**
     * Getter for guestAssociationDateTime
     *
     * @ElementName guestAssociationDateTime
     * @return string|null
     */
    public function getGuestAssociationDateTime()
    {
        return $this->guestAssociationDateTime;
    }

    /**
     * Setter for guestAssociationDateTime
     *
     * @ElementName guestAssociationDateTime
     * @param string|null $guestAssociationDateTime
     * @return $this
     */
    public function setGuestAssociationDateTime($guestAssociationDateTime)
    {
        $this->guestAssociationDateTime = $guestAssociationDateTime;
        return $this;
    }


}

