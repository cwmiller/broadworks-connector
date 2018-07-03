<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetResponse14sp7
 *
 * Response to the GroupGetRequest14sp7.
 *         The response contains the group's profile information.
 *
 * @see GroupGetRequest14sp7
 */
class GroupGetResponse14sp7 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultDomain
     * @var string|null
     */
    private $defaultDomain = null;

    /**
     * @ElementName userLimit
     * @var int|null
     */
    private $userLimit = null;

    /**
     * @ElementName userCount
     * @var int|null
     */
    private $userCount = null;

    /**
     * @ElementName groupName
     * @var string|null
     */
    private $groupName = null;

    /**
     * @ElementName callingLineIdName
     * @var string|null
     */
    private $callingLineIdName = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @var string|null
     */
    private $callingLineIdPhoneNumber = null;

    /**
     * @ElementName callingLineIdDisplayPhoneNumber
     * @var string|null
     */
    private $callingLineIdDisplayPhoneNumber = null;

    /**
     * @ElementName timeZone
     * @var string|null
     */
    private $timeZone = null;

    /**
     * @ElementName timeZoneDisplayName
     * @var string|null
     */
    private $timeZoneDisplayName = null;

    /**
     * @ElementName locationDialingCode
     * @var string|null
     */
    private $locationDialingCode = null;

    /**
     * @ElementName contact
     * @var \CWM\BroadWorksConnector\Ocip\Models\Contact|null
     */
    private $contact = null;

    /**
     * @ElementName address
     * @var \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    private $address = null;

    /**
     * Getter for defaultDomain
     *
     * @ElementName defaultDomain
     * @return string|null
     */
    public function getDefaultDomain()
    {
        return $this->defaultDomain;
    }

    /**
     * Setter for defaultDomain
     *
     * @ElementName defaultDomain
     * @param string|null $defaultDomain
     * @return $this
     */
    public function setDefaultDomain($defaultDomain)
    {
        $this->defaultDomain = $defaultDomain;
        return $this;
    }

    /**
     * Getter for userLimit
     *
     * @ElementName userLimit
     * @return int|null
     */
    public function getUserLimit()
    {
        return $this->userLimit;
    }

    /**
     * Setter for userLimit
     *
     * @ElementName userLimit
     * @param int|null $userLimit
     * @return $this
     */
    public function setUserLimit($userLimit)
    {
        $this->userLimit = $userLimit;
        return $this;
    }

    /**
     * Getter for userCount
     *
     * @ElementName userCount
     * @return int|null
     */
    public function getUserCount()
    {
        return $this->userCount;
    }

    /**
     * Setter for userCount
     *
     * @ElementName userCount
     * @param int|null $userCount
     * @return $this
     */
    public function setUserCount($userCount)
    {
        $this->userCount = $userCount;
        return $this;
    }

    /**
     * Getter for groupName
     *
     * @ElementName groupName
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Setter for groupName
     *
     * @ElementName groupName
     * @param string|null $groupName
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }

    /**
     * Getter for callingLineIdName
     *
     * @ElementName callingLineIdName
     * @return string|null
     */
    public function getCallingLineIdName()
    {
        return $this->callingLineIdName;
    }

    /**
     * Setter for callingLineIdName
     *
     * @ElementName callingLineIdName
     * @param string|null $callingLineIdName
     * @return $this
     */
    public function setCallingLineIdName($callingLineIdName)
    {
        $this->callingLineIdName = $callingLineIdName;
        return $this;
    }

    /**
     * Getter for callingLineIdPhoneNumber
     *
     * @ElementName callingLineIdPhoneNumber
     * @return string|null
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber;
    }

    /**
     * Setter for callingLineIdPhoneNumber
     *
     * @ElementName callingLineIdPhoneNumber
     * @param string|null $callingLineIdPhoneNumber
     * @return $this
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber)
    {
        $this->callingLineIdPhoneNumber = $callingLineIdPhoneNumber;
        return $this;
    }

    /**
     * Getter for callingLineIdDisplayPhoneNumber
     *
     * @ElementName callingLineIdDisplayPhoneNumber
     * @return string|null
     */
    public function getCallingLineIdDisplayPhoneNumber()
    {
        return $this->callingLineIdDisplayPhoneNumber;
    }

    /**
     * Setter for callingLineIdDisplayPhoneNumber
     *
     * @ElementName callingLineIdDisplayPhoneNumber
     * @param string|null $callingLineIdDisplayPhoneNumber
     * @return $this
     */
    public function setCallingLineIdDisplayPhoneNumber($callingLineIdDisplayPhoneNumber)
    {
        $this->callingLineIdDisplayPhoneNumber = $callingLineIdDisplayPhoneNumber;
        return $this;
    }

    /**
     * Getter for timeZone
     *
     * @ElementName timeZone
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Setter for timeZone
     *
     * @ElementName timeZone
     * @param string|null $timeZone
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * Getter for timeZoneDisplayName
     *
     * @ElementName timeZoneDisplayName
     * @return string|null
     */
    public function getTimeZoneDisplayName()
    {
        return $this->timeZoneDisplayName;
    }

    /**
     * Setter for timeZoneDisplayName
     *
     * @ElementName timeZoneDisplayName
     * @param string|null $timeZoneDisplayName
     * @return $this
     */
    public function setTimeZoneDisplayName($timeZoneDisplayName)
    {
        $this->timeZoneDisplayName = $timeZoneDisplayName;
        return $this;
    }

    /**
     * Getter for locationDialingCode
     *
     * @ElementName locationDialingCode
     * @return string|null
     */
    public function getLocationDialingCode()
    {
        return $this->locationDialingCode;
    }

    /**
     * Setter for locationDialingCode
     *
     * @ElementName locationDialingCode
     * @param string|null $locationDialingCode
     * @return $this
     */
    public function setLocationDialingCode($locationDialingCode)
    {
        $this->locationDialingCode = $locationDialingCode;
        return $this;
    }

    /**
     * Getter for contact
     *
     * @ElementName contact
     * @return \CWM\BroadWorksConnector\Ocip\Models\Contact|null
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Setter for contact
     *
     * @ElementName contact
     * @param \CWM\BroadWorksConnector\Ocip\Models\Contact|null $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Getter for address
     *
     * @ElementName address
     * @return \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Setter for address
     *
     * @ElementName address
     * @param \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }


}

