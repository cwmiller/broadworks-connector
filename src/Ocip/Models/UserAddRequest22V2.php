<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAddRequest22V2
 *
 * Request to add a user.
 *         The domain is required in the userId.
 *         The password is not required if external authentication is enabled.
 *
 *         The following elements are only used in AS data mode and will fail in XS data mode:
 *           trunkAddressing
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           nameDialingName
 *           alternateUserId
 *
 *         The following elements are only used in XS data mode and ignored in AS data mode:
 *           allowVideo  
 *           
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         The following elements can only be used by a system administrator:.
 *           allowVideo
 *           alternateUserId
 *
 *         The following elements can only be used by a provisioning administrator:.
 *           alternateUserId
 *           
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:362","type":"sequence","children":[{"id":"53d18cc797d03d802cbc411ad821f1d4:381","type":"choice"}]}]
 */
class UserAddRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $lastName = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $firstName = null;

    /**
     * @ElementName callingLineIdLastName
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $callingLineIdLastName = null;

    /**
     * @ElementName callingLineIdFirstName
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $callingLineIdFirstName = null;

    /**
     * @ElementName nameDialingName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NameDialingName
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @var \CWM\BroadWorksConnector\Ocip\Models\NameDialingName|null
     */
    private $nameDialingName = null;

    /**
     * @ElementName hiraganaLastName
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $hiraganaLastName = null;

    /**
     * @ElementName hiraganaFirstName
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $hiraganaFirstName = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName extension
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 2
     * @MaxLength 20
     * @var string|null
     */
    private $extension = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $callingLineIdPhoneNumber = null;

    /**
     * @ElementName password
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    private $password = null;

    /**
     * @ElementName department
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Abstract \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey,\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $department = null;

    /**
     * @ElementName language
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $language = null;

    /**
     * @ElementName timeZone
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    private $timeZone = null;

    /**
     * @ElementName alias
     * @Type string
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    private $alias = array(
        
    );

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityAndContactEndpointAdd22V2
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:381
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityAndContactEndpointAdd22V2|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName trunkAddressing
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactAdd22
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:381
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactAdd22|null
     */
    private $trunkAddressing = null;

    /**
     * @ElementName title
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    private $title = null;

    /**
     * @ElementName pagerPhoneNumber
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $pagerPhoneNumber = null;

    /**
     * @ElementName mobilePhoneNumber
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $mobilePhoneNumber = null;

    /**
     * @ElementName emailAddress
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $emailAddress = null;

    /**
     * @ElementName yahooId
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    private $yahooId = null;

    /**
     * @ElementName addressLocation
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $addressLocation = null;

    /**
     * @ElementName address
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StreetAddress
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @var \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    private $address = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * @ElementName alternateUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AlternateUserIdEntry
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:362
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateUserIdEntry[]
     */
    private $alternateUserId = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

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
     * Getter for nameDialingName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NameDialingName
     */
    public function getNameDialingName()
    {
        return $this->nameDialingName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nameDialingName;
    }

    /**
     * Setter for nameDialingName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NameDialingName $nameDialingName
     * @return $this
     */
    public function setNameDialingName(\CWM\BroadWorksConnector\Ocip\Models\NameDialingName $nameDialingName)
    {
        $this->nameDialingName = $nameDialingName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNameDialingName()
    {
        $this->nameDialingName = null;
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
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
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
     * @return string
     */
    public function getExtension()
    {
        return $this->extension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extension;
    }

    /**
     * Setter for extension
     *
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
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
     * Getter for password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->password;
    }

    /**
     * Setter for password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPassword()
    {
        $this->password = null;
        return $this;
    }

    /**
     * Getter for department
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     */
    public function getDepartment()
    {
        return $this->department instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->department;
    }

    /**
     * Setter for department
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $department
     * @return $this
     */
    public function setDepartment(\CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $department)
    {
        $this->department = $department;
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
     * Getter for alias
     *
     * @return string[]
     */
    public function getAlias()
    {
        return $this->alias instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alias;
    }

    /**
     * Setter for alias
     *
     * @param string[] $alias
     * @return $this
     */
    public function setAlias(array $alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlias()
    {
        $this->alias = null;
        return $this;
    }

    /**
     * Adder for alias
     *
     * @param string $alias
     * @return $this
     */
    public function addAlias(string $alias)
    {
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityAndContactEndpointAdd22V2
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityAndContactEndpointAdd22V2 $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceMultipleIdentityAndContactEndpointAdd22V2 $accessDeviceEndpoint)
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
     * Getter for trunkAddressing
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactAdd22
     */
    public function getTrunkAddressing()
    {
        return $this->trunkAddressing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkAddressing;
    }

    /**
     * Setter for trunkAddressing
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactAdd22 $trunkAddressing
     * @return $this
     */
    public function setTrunkAddressing(\CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactAdd22 $trunkAddressing)
    {
        $this->trunkAddressing = $trunkAddressing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkAddressing()
    {
        $this->trunkAddressing = null;
        return $this;
    }

    /**
     * Getter for title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->title;
    }

    /**
     * Setter for title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * @return string
     */
    public function getPagerPhoneNumber()
    {
        return $this->pagerPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pagerPhoneNumber;
    }

    /**
     * Setter for pagerPhoneNumber
     *
     * @param string $pagerPhoneNumber
     * @return $this
     */
    public function setPagerPhoneNumber($pagerPhoneNumber)
    {
        $this->pagerPhoneNumber = $pagerPhoneNumber;
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
     * @return string
     */
    public function getMobilePhoneNumber()
    {
        return $this->mobilePhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobilePhoneNumber;
    }

    /**
     * Setter for mobilePhoneNumber
     *
     * @param string $mobilePhoneNumber
     * @return $this
     */
    public function setMobilePhoneNumber($mobilePhoneNumber)
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;
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
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emailAddress;
    }

    /**
     * Setter for emailAddress
     *
     * @param string $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
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
     * @return string
     */
    public function getYahooId()
    {
        return $this->yahooId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->yahooId;
    }

    /**
     * Setter for yahooId
     *
     * @param string $yahooId
     * @return $this
     */
    public function setYahooId($yahooId)
    {
        $this->yahooId = $yahooId;
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
     * @return string
     */
    public function getAddressLocation()
    {
        return $this->addressLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->addressLocation;
    }

    /**
     * Setter for addressLocation
     *
     * @param string $addressLocation
     * @return $this
     */
    public function setAddressLocation($addressLocation)
    {
        $this->addressLocation = $addressLocation;
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
     * @return string
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
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

    /**
     * Getter for alternateUserId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AlternateUserIdEntry[]
     */
    public function getAlternateUserId()
    {
        return $this->alternateUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateUserId;
    }

    /**
     * Setter for alternateUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateUserIdEntry[] $alternateUserId
     * @return $this
     */
    public function setAlternateUserId(array $alternateUserId)
    {
        $this->alternateUserId = $alternateUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateUserId()
    {
        $this->alternateUserId = null;
        return $this;
    }

    /**
     * Adder for alternateUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AlternateUserIdEntry $alternateUserId
     * @return $this
     */
    public function addAlternateUserId($alternateUserId)
    {
        $this->alternateUserId[] = $alternateUserId;
        return $this;
    }


}

