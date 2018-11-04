<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserModifyRequest14sp9
 *
 * Request to modify a user. The response is either
 *         SuccessResponse or ErrorResponse.
 *         Replaced by: UserModifyRequest16
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see UserModifyRequest16
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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $phoneNumber = null;

    /**
     * @ElementName extension
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $extension = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callingLineIdPhoneNumber = null;

    /**
     * @ElementName oldPassword
     * @var string|null
     */
    private $oldPassword = null;

    /**
     * @ElementName newPassword
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $newPassword = null;

    /**
     * @ElementName department
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sipAliasList = null;

    /**
     * @ElementName endpoint
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest14sp9\Endpoint|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $endpoint = null;

    /**
     * @ElementName title
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $title = null;

    /**
     * @ElementName pagerPhoneNumber
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $pagerPhoneNumber = null;

    /**
     * @ElementName mobilePhoneNumber
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $mobilePhoneNumber = null;

    /**
     * @ElementName emailAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $emailAddress = null;

    /**
     * @ElementName yahooId
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $yahooId = null;

    /**
     * @ElementName addressLocation
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $addressLocation = null;

    /**
     * @ElementName address
     * @var \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    private $address = null;

    /**
     * @ElementName networkClassOfService
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $phoneNumber
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Setter for extension
     *
     * @ElementName extension
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $extension
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber;
    }

    /**
     * Setter for callingLineIdPhoneNumber
     *
     * @ElementName callingLineIdPhoneNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $callingLineIdPhoneNumber
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * Setter for newPassword
     *
     * @ElementName newPassword
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $newPassword
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
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Setter for department
     *
     * @ElementName department
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null|\CWM\BroadWorksConnector\Ocip\Nil $department
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
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSipAliasList()
    {
        return $this->sipAliasList;
    }

    /**
     * Setter for sipAliasList
     *
     * @ElementName sipAliasList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList|null|\CWM\BroadWorksConnector\Ocip\Nil $sipAliasList
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
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest14sp9\Endpoint|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Setter for endpoint
     *
     * @ElementName endpoint
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest14sp9\Endpoint|null|\CWM\BroadWorksConnector\Ocip\Nil $endpoint
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Setter for title
     *
     * @ElementName title
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $title
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPagerPhoneNumber()
    {
        return $this->pagerPhoneNumber;
    }

    /**
     * Setter for pagerPhoneNumber
     *
     * @ElementName pagerPhoneNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $pagerPhoneNumber
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMobilePhoneNumber()
    {
        return $this->mobilePhoneNumber;
    }

    /**
     * Setter for mobilePhoneNumber
     *
     * @ElementName mobilePhoneNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $mobilePhoneNumber
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Setter for emailAddress
     *
     * @ElementName emailAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $emailAddress
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getYahooId()
    {
        return $this->yahooId;
    }

    /**
     * Setter for yahooId
     *
     * @ElementName yahooId
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $yahooId
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAddressLocation()
    {
        return $this->addressLocation;
    }

    /**
     * Setter for addressLocation
     *
     * @ElementName addressLocation
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $addressLocation
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }


}

