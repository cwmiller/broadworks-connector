<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserModifyRequest14sp9
 *
 * Request to modify a user. The response is either
 *         SuccessResponse or ErrorResponse.
 *         Replaced by: UserModifyRequest16
 */
class UserModifyRequest14sp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName lastName
     * @var string|null
     */
    private $lastName = null;

    /**
     * @ElementName firstName
     * @var string|null
     */
    private $firstName = null;

    /**
     * @ElementName callingLineIdLastName
     * @var string|null
     */
    private $callingLineIdLastName = null;

    /**
     * @ElementName callingLineIdFirstName
     * @var string|null
     */
    private $callingLineIdFirstName = null;

    /**
     * @ElementName hiraganaLastName
     * @var string|null
     */
    private $hiraganaLastName = null;

    /**
     * @ElementName hiraganaFirstName
     * @var string|null
     */
    private $hiraganaFirstName = null;

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName extension
     * @var string|null
     */
    private $extension = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @var string|null
     */
    private $callingLineIdPhoneNumber = null;

    /**
     * @ElementName oldPassword
     * @var string|null
     */
    private $oldPassword = null;

    /**
     * @ElementName newPassword
     * @var string|null
     */
    private $newPassword = null;

    /**
     * @ElementName department
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $department = null;

    /**
     * @ElementName language
     * @var string|null
     */
    private $language = null;

    /**
     * @ElementName timeZone
     * @var string|null
     */
    private $timeZone = null;

    /**
     * @ElementName sipAliasList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList|null
     */
    private $sipAliasList = null;

    /**
     * @ElementName endpoint
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest14sp9\Endpoint|null
     */
    private $endpoint = null;

    /**
     * @ElementName title
     * @var string|null
     */
    private $title = null;

    /**
     * @ElementName pagerPhoneNumber
     * @var string|null
     */
    private $pagerPhoneNumber = null;

    /**
     * @ElementName mobilePhoneNumber
     * @var string|null
     */
    private $mobilePhoneNumber = null;

    /**
     * @ElementName emailAddress
     * @var string|null
     */
    private $emailAddress = null;

    /**
     * @ElementName yahooId
     * @var string|null
     */
    private $yahooId = null;

    /**
     * @ElementName addressLocation
     * @var string|null
     */
    private $addressLocation = null;

    /**
     * @ElementName address
     * @var \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    private $address = null;

    /**
     * @ElementName networkClassOfService
     * @var string|null
     */
    private $networkClassOfService = null;

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
     * Getter for lastName
     *
     * @ElementName lastName
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Setter for lastName
     *
     * @ElementName lastName
     * @param string|null $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Getter for firstName
     *
     * @ElementName firstName
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Setter for firstName
     *
     * @ElementName firstName
     * @param string|null $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Getter for callingLineIdLastName
     *
     * @ElementName callingLineIdLastName
     * @return string|null
     */
    public function getCallingLineIdLastName()
    {
        return $this->callingLineIdLastName;
    }

    /**
     * Setter for callingLineIdLastName
     *
     * @ElementName callingLineIdLastName
     * @param string|null $callingLineIdLastName
     * @return $this
     */
    public function setCallingLineIdLastName($callingLineIdLastName)
    {
        $this->callingLineIdLastName = $callingLineIdLastName;
        return $this;
    }

    /**
     * Getter for callingLineIdFirstName
     *
     * @ElementName callingLineIdFirstName
     * @return string|null
     */
    public function getCallingLineIdFirstName()
    {
        return $this->callingLineIdFirstName;
    }

    /**
     * Setter for callingLineIdFirstName
     *
     * @ElementName callingLineIdFirstName
     * @param string|null $callingLineIdFirstName
     * @return $this
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName)
    {
        $this->callingLineIdFirstName = $callingLineIdFirstName;
        return $this;
    }

    /**
     * Getter for hiraganaLastName
     *
     * @ElementName hiraganaLastName
     * @return string|null
     */
    public function getHiraganaLastName()
    {
        return $this->hiraganaLastName;
    }

    /**
     * Setter for hiraganaLastName
     *
     * @ElementName hiraganaLastName
     * @param string|null $hiraganaLastName
     * @return $this
     */
    public function setHiraganaLastName($hiraganaLastName)
    {
        $this->hiraganaLastName = $hiraganaLastName;
        return $this;
    }

    /**
     * Getter for hiraganaFirstName
     *
     * @ElementName hiraganaFirstName
     * @return string|null
     */
    public function getHiraganaFirstName()
    {
        return $this->hiraganaFirstName;
    }

    /**
     * Setter for hiraganaFirstName
     *
     * @ElementName hiraganaFirstName
     * @param string|null $hiraganaFirstName
     * @return $this
     */
    public function setHiraganaFirstName($hiraganaFirstName)
    {
        $this->hiraganaFirstName = $hiraganaFirstName;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Getter for extension
     *
     * @ElementName extension
     * @return string|null
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Setter for extension
     *
     * @ElementName extension
     * @param string|null $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
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
     * Getter for oldPassword
     *
     * @ElementName oldPassword
     * @return string|null
     */
    public function getOldPassword()
    {
        return $this->oldPassword;
    }

    /**
     * Setter for oldPassword
     *
     * @ElementName oldPassword
     * @param string|null $oldPassword
     * @return $this
     */
    public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;
        return $this;
    }

    /**
     * Getter for newPassword
     *
     * @ElementName newPassword
     * @return string|null
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * Setter for newPassword
     *
     * @ElementName newPassword
     * @param string|null $newPassword
     * @return $this
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
        return $this;
    }

    /**
     * Getter for department
     *
     * @ElementName department
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Setter for department
     *
     * @ElementName department
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null $department
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * Getter for language
     *
     * @ElementName language
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Setter for language
     *
     * @ElementName language
     * @param string|null $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
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
     * Getter for sipAliasList
     *
     * @ElementName sipAliasList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList|null
     */
    public function getSipAliasList()
    {
        return $this->sipAliasList;
    }

    /**
     * Setter for sipAliasList
     *
     * @ElementName sipAliasList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList|null $sipAliasList
     * @return $this
     */
    public function setSipAliasList($sipAliasList)
    {
        $this->sipAliasList = $sipAliasList;
        return $this;
    }

    /**
     * Getter for endpoint
     *
     * @ElementName endpoint
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest14sp9\Endpoint|null
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Setter for endpoint
     *
     * @ElementName endpoint
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest14sp9\Endpoint|null $endpoint
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Getter for title
     *
     * @ElementName title
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Setter for title
     *
     * @ElementName title
     * @param string|null $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Getter for pagerPhoneNumber
     *
     * @ElementName pagerPhoneNumber
     * @return string|null
     */
    public function getPagerPhoneNumber()
    {
        return $this->pagerPhoneNumber;
    }

    /**
     * Setter for pagerPhoneNumber
     *
     * @ElementName pagerPhoneNumber
     * @param string|null $pagerPhoneNumber
     * @return $this
     */
    public function setPagerPhoneNumber($pagerPhoneNumber)
    {
        $this->pagerPhoneNumber = $pagerPhoneNumber;
        return $this;
    }

    /**
     * Getter for mobilePhoneNumber
     *
     * @ElementName mobilePhoneNumber
     * @return string|null
     */
    public function getMobilePhoneNumber()
    {
        return $this->mobilePhoneNumber;
    }

    /**
     * Setter for mobilePhoneNumber
     *
     * @ElementName mobilePhoneNumber
     * @param string|null $mobilePhoneNumber
     * @return $this
     */
    public function setMobilePhoneNumber($mobilePhoneNumber)
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;
        return $this;
    }

    /**
     * Getter for emailAddress
     *
     * @ElementName emailAddress
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Setter for emailAddress
     *
     * @ElementName emailAddress
     * @param string|null $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * Getter for yahooId
     *
     * @ElementName yahooId
     * @return string|null
     */
    public function getYahooId()
    {
        return $this->yahooId;
    }

    /**
     * Setter for yahooId
     *
     * @ElementName yahooId
     * @param string|null $yahooId
     * @return $this
     */
    public function setYahooId($yahooId)
    {
        $this->yahooId = $yahooId;
        return $this;
    }

    /**
     * Getter for addressLocation
     *
     * @ElementName addressLocation
     * @return string|null
     */
    public function getAddressLocation()
    {
        return $this->addressLocation;
    }

    /**
     * Setter for addressLocation
     *
     * @ElementName addressLocation
     * @param string|null $addressLocation
     * @return $this
     */
    public function setAddressLocation($addressLocation)
    {
        $this->addressLocation = $addressLocation;
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

    /**
     * Getter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @return string|null
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @param string|null $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }


}

