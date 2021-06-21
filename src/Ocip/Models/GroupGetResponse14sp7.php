<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetResponse14sp7
 *
 * Response to the GroupGetRequest14sp7.
 *         The response contains the group's profile information.
 *
 * @see GroupGetRequest14sp7
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:10008","type":"sequence"}]
 */
class GroupGetResponse14sp7 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultDomain
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:10008
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $defaultDomain = null;

    /**
     * @ElementName userLimit
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:10008
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    private $userLimit = null;

    /**
     * @ElementName userCount
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:10008
     * @var int|null
     */
    private $userCount = null;

    /**
     * @ElementName groupName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:10008
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $groupName = null;

    /**
     * @ElementName callingLineIdName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:10008
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $callingLineIdName = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:10008
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $callingLineIdPhoneNumber = null;

    /**
     * @ElementName callingLineIdDisplayPhoneNumber
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:10008
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $callingLineIdDisplayPhoneNumber = null;

    /**
     * @ElementName timeZone
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:10008
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    private $timeZone = null;

    /**
     * @ElementName timeZoneDisplayName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:10008
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    private $timeZoneDisplayName = null;

    /**
     * @ElementName locationDialingCode
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:10008
     * @MinLength 1
     * @MaxLength 15
     * @var string|null
     */
    private $locationDialingCode = null;

    /**
     * @ElementName contact
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Contact
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:10008
     * @var \CWM\BroadWorksConnector\Ocip\Models\Contact|null
     */
    private $contact = null;

    /**
     * @ElementName address
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StreetAddress
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:10008
     * @var \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    private $address = null;

    /**
     * Getter for defaultDomain
     *
     * @return string
     */
    public function getDefaultDomain()
    {
        return $this->defaultDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultDomain;
    }

    /**
     * Setter for defaultDomain
     *
     * @param string $defaultDomain
     * @return $this
     */
    public function setDefaultDomain($defaultDomain)
    {
        $this->defaultDomain = $defaultDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultDomain()
    {
        $this->defaultDomain = null;
        return $this;
    }

    /**
     * Getter for userLimit
     *
     * @return int
     */
    public function getUserLimit()
    {
        return $this->userLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userLimit;
    }

    /**
     * Setter for userLimit
     *
     * @param int $userLimit
     * @return $this
     */
    public function setUserLimit($userLimit)
    {
        $this->userLimit = $userLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserLimit()
    {
        $this->userLimit = null;
        return $this;
    }

    /**
     * Getter for userCount
     *
     * @return int
     */
    public function getUserCount()
    {
        return $this->userCount instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userCount;
    }

    /**
     * Setter for userCount
     *
     * @param int $userCount
     * @return $this
     */
    public function setUserCount($userCount)
    {
        $this->userCount = $userCount;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserCount()
    {
        $this->userCount = null;
        return $this;
    }

    /**
     * Getter for groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupName;
    }

    /**
     * Setter for groupName
     *
     * @param string $groupName
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupName()
    {
        $this->groupName = null;
        return $this;
    }

    /**
     * Getter for callingLineIdName
     *
     * @return string
     */
    public function getCallingLineIdName()
    {
        return $this->callingLineIdName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdName;
    }

    /**
     * Setter for callingLineIdName
     *
     * @param string $callingLineIdName
     * @return $this
     */
    public function setCallingLineIdName($callingLineIdName)
    {
        $this->callingLineIdName = $callingLineIdName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdName()
    {
        $this->callingLineIdName = null;
        return $this;
    }

    /**
     * Getter for callingLineIdPhoneNumber
     *
     * @return string
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdPhoneNumber;
    }

    /**
     * Setter for callingLineIdPhoneNumber
     *
     * @param string $callingLineIdPhoneNumber
     * @return $this
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber)
    {
        $this->callingLineIdPhoneNumber = $callingLineIdPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdPhoneNumber()
    {
        $this->callingLineIdPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for callingLineIdDisplayPhoneNumber
     *
     * @return string
     */
    public function getCallingLineIdDisplayPhoneNumber()
    {
        return $this->callingLineIdDisplayPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdDisplayPhoneNumber;
    }

    /**
     * Setter for callingLineIdDisplayPhoneNumber
     *
     * @param string $callingLineIdDisplayPhoneNumber
     * @return $this
     */
    public function setCallingLineIdDisplayPhoneNumber($callingLineIdDisplayPhoneNumber)
    {
        $this->callingLineIdDisplayPhoneNumber = $callingLineIdDisplayPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdDisplayPhoneNumber()
    {
        $this->callingLineIdDisplayPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeZone;
    }

    /**
     * Setter for timeZone
     *
     * @param string $timeZone
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeZone()
    {
        $this->timeZone = null;
        return $this;
    }

    /**
     * Getter for timeZoneDisplayName
     *
     * @return string
     */
    public function getTimeZoneDisplayName()
    {
        return $this->timeZoneDisplayName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeZoneDisplayName;
    }

    /**
     * Setter for timeZoneDisplayName
     *
     * @param string $timeZoneDisplayName
     * @return $this
     */
    public function setTimeZoneDisplayName($timeZoneDisplayName)
    {
        $this->timeZoneDisplayName = $timeZoneDisplayName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeZoneDisplayName()
    {
        $this->timeZoneDisplayName = null;
        return $this;
    }

    /**
     * Getter for locationDialingCode
     *
     * @return string
     */
    public function getLocationDialingCode()
    {
        return $this->locationDialingCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locationDialingCode;
    }

    /**
     * Setter for locationDialingCode
     *
     * @param string $locationDialingCode
     * @return $this
     */
    public function setLocationDialingCode($locationDialingCode)
    {
        $this->locationDialingCode = $locationDialingCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocationDialingCode()
    {
        $this->locationDialingCode = null;
        return $this;
    }

    /**
     * Getter for contact
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Contact
     */
    public function getContact()
    {
        return $this->contact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contact;
    }

    /**
     * Setter for contact
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Contact $contact
     * @return $this
     */
    public function setContact(\CWM\BroadWorksConnector\Ocip\Models\Contact $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContact()
    {
        $this->contact = null;
        return $this;
    }

    /**
     * Getter for address
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StreetAddress
     */
    public function getAddress()
    {
        return $this->address instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->address;
    }

    /**
     * Setter for address
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StreetAddress $address
     * @return $this
     */
    public function setAddress(\CWM\BroadWorksConnector\Ocip\Models\StreetAddress $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAddress()
    {
        $this->address = null;
        return $this;
    }


}

