<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserModifyRequest17sp4
 *
 * Request to modify a user. 
 *         When oldPassword is specified, all password rule applies. If oldPassword
 * in not specified,
 *         any password rule related to old password does not apply.         
 *         The request will fail if officeZoneName or primaryZoneName is present
 * but the Location-Based Calling Restrictions service is not assigned to the user.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in AS data mode and ignored in XS
 * data mode:
 *           contact[2]-contact[5]
 *           nameDialingName
 *           alternateUserIdList
 *         The impId and impPassword are accepted when the Third-Party IMP service
 * is assigned to the user; 
 *         when Integrated IMP service is assigned to the user and active, only the
 * impPassword is accepted; 
 *         all other cases, the request fails if either field is changed.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserModifyRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName nameDialingName
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\NameDialingName|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $nameDialingName = null;

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
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest17sp4Endpoint|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * @ElementName officeZoneName
     * @var string|null
     */
    private $officeZoneName = null;

    /**
     * @ElementName primaryZoneName
     * @var string|null
     */
    private $primaryZoneName = null;

    /**
     * @ElementName impId
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $impId = null;

    /**
     * @ElementName impPassword
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $impPassword = null;

    /**
     * @ElementName alternateUserIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementAlternateUserIdEntryList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $alternateUserIdList = null;

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
     * Getter for nameDialingName
     *
     * @ElementName nameDialingName
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\NameDialingName|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getNameDialingName()
    {
        return $this->nameDialingName;
    }

    /**
     * Setter for nameDialingName
     *
     * @ElementName nameDialingName
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\NameDialingName|null|\CWM\BroadWorksConnector\Ocip\Nil $nameDialingName
     * @return $this
     */
    public function setNameDialingName(\CWM\BroadWorksConnector\Ocip\Models\NameDialingName $nameDialingName)
    {
        $this->nameDialingName = $nameDialingName;
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
    public function setDepartment(\CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $department)
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
    public function setSipAliasList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList $sipAliasList)
    {
        $this->sipAliasList = $sipAliasList;
        return $this;
    }

    /**
     * Getter for endpoint
     *
     * @ElementName endpoint
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest17sp4Endpoint|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest17sp4Endpoint|null|\CWM\BroadWorksConnector\Ocip\Nil $endpoint
     * @return $this
     */
    public function setEndpoint(\CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest17sp4Endpoint $endpoint)
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
    public function setAddress(\CWM\BroadWorksConnector\Ocip\Models\StreetAddress $address)
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

    /**
     * Getter for officeZoneName
     *
     * @ElementName officeZoneName
     * @return string|null
     */
    public function getOfficeZoneName()
    {
        return $this->officeZoneName;
    }

    /**
     * Setter for officeZoneName
     *
     * @ElementName officeZoneName
     * @param string|null $officeZoneName
     * @return $this
     */
    public function setOfficeZoneName($officeZoneName)
    {
        $this->officeZoneName = $officeZoneName;
        return $this;
    }

    /**
     * Getter for primaryZoneName
     *
     * @ElementName primaryZoneName
     * @return string|null
     */
    public function getPrimaryZoneName()
    {
        return $this->primaryZoneName;
    }

    /**
     * Setter for primaryZoneName
     *
     * @ElementName primaryZoneName
     * @param string|null $primaryZoneName
     * @return $this
     */
    public function setPrimaryZoneName($primaryZoneName)
    {
        $this->primaryZoneName = $primaryZoneName;
        return $this;
    }

    /**
     * Getter for impId
     *
     * @ElementName impId
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getImpId()
    {
        return $this->impId;
    }

    /**
     * Setter for impId
     *
     * @ElementName impId
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $impId
     * @return $this
     */
    public function setImpId($impId)
    {
        $this->impId = $impId;
        return $this;
    }

    /**
     * Getter for impPassword
     *
     * @ElementName impPassword
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getImpPassword()
    {
        return $this->impPassword;
    }

    /**
     * Setter for impPassword
     *
     * @ElementName impPassword
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $impPassword
     * @return $this
     */
    public function setImpPassword($impPassword)
    {
        $this->impPassword = $impPassword;
        return $this;
    }

    /**
     * Getter for alternateUserIdList
     *
     * @ElementName alternateUserIdList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementAlternateUserIdEntryList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAlternateUserIdList()
    {
        return $this->alternateUserIdList;
    }

    /**
     * Setter for alternateUserIdList
     *
     * @ElementName alternateUserIdList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementAlternateUserIdEntryList|null|\CWM\BroadWorksConnector\Ocip\Nil $alternateUserIdList
     * @return $this
     */
    public function setAlternateUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementAlternateUserIdEntryList $alternateUserIdList)
    {
        $this->alternateUserIdList = $alternateUserIdList;
        return $this;
    }


}

