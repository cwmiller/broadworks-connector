<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingHostGuestAssociationGetResponse
 *
 * Response to GroupFlexibleSeatingHostGuestAssociationGetRequest.
 *
 * @see GroupFlexibleSeatingHostGuestAssociationGetRequest
 * @Groups [{"id":"43afb2158d313a1d1a148124d7caba1e:290","type":"sequence"}]
 */
class GroupFlexibleSeatingHostGuestAssociationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enforceAssociationLimit
     * @Type bool
     * @Group 43afb2158d313a1d1a148124d7caba1e:290
     * @var bool|null
     */
    private $enforceAssociationLimit = null;

    /**
     * @ElementName associationLimitHours
     * @Type int
     * @Group 43afb2158d313a1d1a148124d7caba1e:290
     * @MinInclusive 1
     * @MaxInclusive 999
     * @var int|null
     */
    private $associationLimitHours = null;

    /**
     * @ElementName accessLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FlexibleSeatingHostAccessLevel
     * @Group 43afb2158d313a1d1a148124d7caba1e:290
     * @var \CWM\BroadWorksConnector\Ocip\Models\FlexibleSeatingHostAccessLevel|null
     */
    private $accessLevel = null;

    /**
     * @ElementName guestLastName
     * @Type string
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:290
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $guestLastName = null;

    /**
     * @ElementName guestFirstName
     * @Type string
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:290
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $guestFirstName = null;

    /**
     * @ElementName guestPhoneNumber
     * @Type string
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:290
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $guestPhoneNumber = null;

    /**
     * @ElementName guestExtension
     * @Type string
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:290
     * @MinLength 2
     * @MaxLength 20
     * @var string|null
     */
    private $guestExtension = null;

    /**
     * @ElementName guestLocationDialingCode
     * @Type string
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:290
     * @MinLength 1
     * @MaxLength 15
     * @var string|null
     */
    private $guestLocationDialingCode = null;

    /**
     * @ElementName guestAssociationDateTime
     * @Type string
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:290
     * @var string|null
     */
    private $guestAssociationDateTime = null;

    /**
     * Getter for enforceAssociationLimit
     *
     * @return bool
     */
    public function getEnforceAssociationLimit()
    {
        return $this->enforceAssociationLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforceAssociationLimit;
    }

    /**
     * Setter for enforceAssociationLimit
     *
     * @param bool $enforceAssociationLimit
     * @return $this
     */
    public function setEnforceAssociationLimit($enforceAssociationLimit)
    {
        $this->enforceAssociationLimit = $enforceAssociationLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforceAssociationLimit()
    {
        $this->enforceAssociationLimit = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\FlexibleSeatingHostAccessLevel
     */
    public function getAccessLevel()
    {
        return $this->accessLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessLevel;
    }

    /**
     * Setter for accessLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FlexibleSeatingHostAccessLevel $accessLevel
     * @return $this
     */
    public function setAccessLevel(\CWM\BroadWorksConnector\Ocip\Models\FlexibleSeatingHostAccessLevel $accessLevel)
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

