<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserModifyRequest14sp9
 *
 * Request to modify a user. The response is either SuccessResponse or ErrorResponse.
 *                 Replaced by: UserModifyRequest16
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see UserModifyRequest16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:11514","type":"sequence"}]
 */
class UserModifyRequest14sp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null
     */
    private $lastName = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null
     */
    private $firstName = null;

    /**
     * @ElementName callingLineIdLastName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null
     */
    private $callingLineIdLastName = null;

    /**
     * @ElementName callingLineIdFirstName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null
     */
    private $callingLineIdFirstName = null;

    /**
     * @ElementName hiraganaLastName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null
     */
    private $hiraganaLastName = null;

    /**
     * @ElementName hiraganaFirstName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null
     */
    private $hiraganaFirstName = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $phoneNumber = null;

    /**
     * @ElementName extension
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $extension = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callingLineIdPhoneNumber = null;

    /**
     * @ElementName oldPassword
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null
     */
    private $oldPassword = null;

    /**
     * @ElementName newPassword
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $newPassword = null;

    /**
     * @ElementName department
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $department = null;

    /**
     * @ElementName language
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null
     */
    private $language = null;

    /**
     * @ElementName timeZone
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null
     */
    private $timeZone = null;

    /**
     * @ElementName sipAliasList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sipAliasList = null;

    /**
     * @ElementName endpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest14sp9Endpoint
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest14sp9Endpoint|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $endpoint = null;

    /**
     * @ElementName title
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $title = null;

    /**
     * @ElementName pagerPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $pagerPhoneNumber = null;

    /**
     * @ElementName mobilePhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $mobilePhoneNumber = null;

    /**
     * @ElementName emailAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $emailAddress = null;

    /**
     * @ElementName yahooId
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $yahooId = null;

    /**
     * @ElementName addressLocation
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $addressLocation = null;

    /**
     * @ElementName address
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StreetAddress
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    private $address = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:11514
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $networkClassOfService = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lastName;
    }

    /**
     * Setter for lastName
     *
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLastName()
    {
        $this->lastName = null;
        return $this;
    }

    /**
     * Getter for firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->firstName;
    }

    /**
     * Setter for firstName
     *
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFirstName()
    {
        $this->firstName = null;
        return $this;
    }

    /**
     * Getter for callingLineIdLastName
     *
     * @return string
     */
    public function getCallingLineIdLastName()
    {
        return $this->callingLineIdLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdLastName;
    }

    /**
     * Setter for callingLineIdLastName
     *
     * @param string $callingLineIdLastName
     * @return $this
     */
    public function setCallingLineIdLastName($callingLineIdLastName)
    {
        $this->callingLineIdLastName = $callingLineIdLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdLastName()
    {
        $this->callingLineIdLastName = null;
        return $this;
    }

    /**
     * Getter for callingLineIdFirstName
     *
     * @return string
     */
    public function getCallingLineIdFirstName()
    {
        return $this->callingLineIdFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdFirstName;
    }

    /**
     * Setter for callingLineIdFirstName
     *
     * @param string $callingLineIdFirstName
     * @return $this
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName)
    {
        $this->callingLineIdFirstName = $callingLineIdFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdFirstName()
    {
        $this->callingLineIdFirstName = null;
        return $this;
    }

    /**
     * Getter for hiraganaLastName
     *
     * @return string
     */
    public function getHiraganaLastName()
    {
        return $this->hiraganaLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hiraganaLastName;
    }

    /**
     * Setter for hiraganaLastName
     *
     * @param string $hiraganaLastName
     * @return $this
     */
    public function setHiraganaLastName($hiraganaLastName)
    {
        $this->hiraganaLastName = $hiraganaLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHiraganaLastName()
    {
        $this->hiraganaLastName = null;
        return $this;
    }

    /**
     * Getter for hiraganaFirstName
     *
     * @return string
     */
    public function getHiraganaFirstName()
    {
        return $this->hiraganaFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hiraganaFirstName;
    }

    /**
     * Setter for hiraganaFirstName
     *
     * @param string $hiraganaFirstName
     * @return $this
     */
    public function setHiraganaFirstName($hiraganaFirstName)
    {
        $this->hiraganaFirstName = $hiraganaFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHiraganaFirstName()
    {
        $this->hiraganaFirstName = null;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        if ($phoneNumber === null) {
            $this->phoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->phoneNumber = $phoneNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Getter for extension
     *
     * @return string|null
     */
    public function getExtension()
    {
        return $this->extension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extension;
    }

    /**
     * Setter for extension
     *
     * @param string|null $extension
     * @return $this
     */
    public function setExtension($extension = null)
    {
        if ($extension === null) {
            $this->extension = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->extension = $extension;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtension()
    {
        $this->extension = null;
        return $this;
    }

    /**
     * Getter for callingLineIdPhoneNumber
     *
     * @return string|null
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdPhoneNumber;
    }

    /**
     * Setter for callingLineIdPhoneNumber
     *
     * @param string|null $callingLineIdPhoneNumber
     * @return $this
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber = null)
    {
        if ($callingLineIdPhoneNumber === null) {
            $this->callingLineIdPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callingLineIdPhoneNumber = $callingLineIdPhoneNumber;
        }
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
     * Getter for oldPassword
     *
     * @return string
     */
    public function getOldPassword()
    {
        return $this->oldPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->oldPassword;
    }

    /**
     * Setter for oldPassword
     *
     * @param string $oldPassword
     * @return $this
     */
    public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOldPassword()
    {
        $this->oldPassword = null;
        return $this;
    }

    /**
     * Getter for newPassword
     *
     * @return string|null
     */
    public function getNewPassword()
    {
        return $this->newPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newPassword;
    }

    /**
     * Setter for newPassword
     *
     * @param string|null $newPassword
     * @return $this
     */
    public function setNewPassword($newPassword = null)
    {
        if ($newPassword === null) {
            $this->newPassword = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->newPassword = $newPassword;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewPassword()
    {
        $this->newPassword = null;
        return $this;
    }

    /**
     * Getter for department
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    public function getDepartment()
    {
        return $this->department instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->department;
    }

    /**
     * Setter for department
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null $department
     * @return $this
     */
    public function setDepartment(\CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $department = null)
    {
        if ($department === null) {
            $this->department = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->department = $department;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartment()
    {
        $this->department = null;
        return $this;
    }

    /**
     * Getter for language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->language;
    }

    /**
     * Setter for language
     *
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLanguage()
    {
        $this->language = null;
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
     * Getter for sipAliasList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList|null
     */
    public function getSipAliasList()
    {
        return $this->sipAliasList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipAliasList;
    }

    /**
     * Setter for sipAliasList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList|null $sipAliasList
     * @return $this
     */
    public function setSipAliasList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList $sipAliasList = null)
    {
        if ($sipAliasList === null) {
            $this->sipAliasList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->sipAliasList = $sipAliasList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipAliasList()
    {
        $this->sipAliasList = null;
        return $this;
    }

    /**
     * Getter for endpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest14sp9Endpoint|null
     */
    public function getEndpoint()
    {
        return $this->endpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endpoint;
    }

    /**
     * Setter for endpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest14sp9Endpoint|null $endpoint
     * @return $this
     */
    public function setEndpoint(\CWM\BroadWorksConnector\Ocip\Models\UserModifyRequest14sp9Endpoint $endpoint = null)
    {
        if ($endpoint === null) {
            $this->endpoint = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->endpoint = $endpoint;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndpoint()
    {
        $this->endpoint = null;
        return $this;
    }

    /**
     * Getter for title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->title;
    }

    /**
     * Setter for title
     *
     * @param string|null $title
     * @return $this
     */
    public function setTitle($title = null)
    {
        if ($title === null) {
            $this->title = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->title = $title;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTitle()
    {
        $this->title = null;
        return $this;
    }

    /**
     * Getter for pagerPhoneNumber
     *
     * @return string|null
     */
    public function getPagerPhoneNumber()
    {
        return $this->pagerPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pagerPhoneNumber;
    }

    /**
     * Setter for pagerPhoneNumber
     *
     * @param string|null $pagerPhoneNumber
     * @return $this
     */
    public function setPagerPhoneNumber($pagerPhoneNumber = null)
    {
        if ($pagerPhoneNumber === null) {
            $this->pagerPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->pagerPhoneNumber = $pagerPhoneNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPagerPhoneNumber()
    {
        $this->pagerPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for mobilePhoneNumber
     *
     * @return string|null
     */
    public function getMobilePhoneNumber()
    {
        return $this->mobilePhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobilePhoneNumber;
    }

    /**
     * Setter for mobilePhoneNumber
     *
     * @param string|null $mobilePhoneNumber
     * @return $this
     */
    public function setMobilePhoneNumber($mobilePhoneNumber = null)
    {
        if ($mobilePhoneNumber === null) {
            $this->mobilePhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->mobilePhoneNumber = $mobilePhoneNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobilePhoneNumber()
    {
        $this->mobilePhoneNumber = null;
        return $this;
    }

    /**
     * Getter for emailAddress
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->emailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emailAddress;
    }

    /**
     * Setter for emailAddress
     *
     * @param string|null $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress = null)
    {
        if ($emailAddress === null) {
            $this->emailAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->emailAddress = $emailAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmailAddress()
    {
        $this->emailAddress = null;
        return $this;
    }

    /**
     * Getter for yahooId
     *
     * @return string|null
     */
    public function getYahooId()
    {
        return $this->yahooId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->yahooId;
    }

    /**
     * Setter for yahooId
     *
     * @param string|null $yahooId
     * @return $this
     */
    public function setYahooId($yahooId = null)
    {
        if ($yahooId === null) {
            $this->yahooId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->yahooId = $yahooId;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetYahooId()
    {
        $this->yahooId = null;
        return $this;
    }

    /**
     * Getter for addressLocation
     *
     * @return string|null
     */
    public function getAddressLocation()
    {
        return $this->addressLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->addressLocation;
    }

    /**
     * Setter for addressLocation
     *
     * @param string|null $addressLocation
     * @return $this
     */
    public function setAddressLocation($addressLocation = null)
    {
        if ($addressLocation === null) {
            $this->addressLocation = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->addressLocation = $addressLocation;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAddressLocation()
    {
        $this->addressLocation = null;
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

    /**
     * Getter for networkClassOfService
     *
     * @return string|null
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string|null $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService = null)
    {
        if ($networkClassOfService === null) {
            $this->networkClassOfService = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->networkClassOfService = $networkClassOfService;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }


}

