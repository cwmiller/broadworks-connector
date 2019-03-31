<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserConsolidatedAddRequest
 *
 * The response is either SuccessResponse or ErrorResponse.
 *          
 *          In AS and Amplify  Data Mode:
 *            The group user limit will be increased by one if needed.
 *            
 *            The group will be added if it does not exist and if the command is executed by a Service 
 *            Provider level administrator or above. If the group needs to be created, the 
 *            groupProperties element must be set or the request will fail.
 *            The groupProperties element will be ignored if the group already exists.
 *            
 *            If the domain has not been assigned to the group, it will be added to group if the 
 *            command is executed by a Service provider level administrator or above.
 *            If the domain has not been assigned to the service provider, it will be added to the 
 *            service provider if the command is executed by a Provisioning level administrator or 
 *            above. The command will fail otherwise.
 *            
 *            If the phoneNumber has not been assigned to the group and addPhoneNumberToGroup is set 
 *            to true, it will be added to group if the command is executed by a service provider 
 *            administrator or above and the number is already assigned to the service provider. The 
 *            command will fail otherwise.
 *            
 *            The password is not required if external authentication is enabled.
 *            Alternate user ids can be added by a group level administrator or above.
 *            
 *            When sharedCallAppearanceAccessDeviceEndpoint element is included and the Shared Call 
 *            Appearance is not included in the service/service pack of the request or in the 
 *            "new user template", the request will fail.
 *            
 *            The userService/servicePack will be authorized to the group if it has not been 
 *            authorized to the group if the command is executed by a Service Provider level 
 *            administrator or above. The command will fail otherwise.
 *            The authorizedQuantity will be set to unlimited if not present.
 *            
 *            When thirdPartyVoiceMail elements are included and the Third Party Voice Mail Support 
 *            service is not included in the service/service pack of the request or in the 
 *            "new user template", the request will fail.
 *            
 *            When sipAuthenticationData element is included and the Authentication service is not 
 *            included in the service/service pack of the request or in the "new user template", 
 *            the request will fail.
 *            
 *            
 *          In XS data mode:
 *            only the System level administrator has the authorization level to execute the command.
 *            The group will be added if it does not exist. If the group needs to be created, the 
 *            groupProperties element must be set or the request will fail.
 *            The groupProperties element will be ignored if the group already exists. 
 *            
 *            If the phoneNumber has not been assigned to the group, it will be added to group and 
 *            service provider if needed.
 *            
 *            When sharedCallAppearanceAccessDeviceEndpoint element is included and the Shared 
 *            Call Appearance is not included in the service/service pack of the request, the request 
 *            will fail.
 *            
 *          The following elements are ignored in XS data mode:
 *            addPhoneNumberToGroup
 *            nameDialingName 
 *            alternateUserId
 *            passcode
 *            trunkAddressing
 *            thirdPartyVoiceMailServerSelection
 *            thirdPartyVoiceMailServerUserServer
 *            thirdPartyVoiceMailServerMailboxIdType
 *            thirdPartyVoiceMailMailboxURL
 *            sipAuthenticationData
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:1270","type":"sequence","children":[{"id":"53d18cc797d03d802cbc411ad821f1d4:1293","type":"choice"}]}]
 */
class UserConsolidatedAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName groupProperties
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedGroupProperties
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedGroupProperties|null
     */
    private $groupProperties = null;

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName addPhoneNumberToGroup
     * @Type bool
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @var bool|null
     */
    private $addPhoneNumberToGroup = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $lastName = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $firstName = null;

    /**
     * @ElementName callingLineIdLastName
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $callingLineIdLastName = null;

    /**
     * @ElementName callingLineIdFirstName
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $callingLineIdFirstName = null;

    /**
     * @ElementName nameDialingName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NameDialingName
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @var \CWM\BroadWorksConnector\Ocip\Models\NameDialingName|null
     */
    private $nameDialingName = null;

    /**
     * @ElementName hiraganaLastName
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $hiraganaLastName = null;

    /**
     * @ElementName hiraganaFirstName
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $hiraganaFirstName = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName alternateUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AlternateUserIdEntry
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @var \CWM\BroadWorksConnector\Ocip\Models\AlternateUserIdEntry[]
     */
    private $alternateUserId = array(
        
    );

    /**
     * @ElementName extension
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 2
     * @MaxLength 20
     * @var string|null
     */
    private $extension = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $callingLineIdPhoneNumber = null;

    /**
     * @ElementName password
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    private $password = null;

    /**
     * @ElementName passcode
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $passcode = null;

    /**
     * @ElementName department
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $department = null;

    /**
     * @ElementName language
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $language = null;

    /**
     * @ElementName timeZone
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
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
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    private $alias = array(
        
    );

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedAccessDeviceMultipleIdentityEndpointAndContactAdd
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1293
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedAccessDeviceMultipleIdentityEndpointAndContactAdd|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName trunkAddressing
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactAdd
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1293
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactAdd|null
     */
    private $trunkAddressing = null;

    /**
     * @ElementName sharedCallAppearanceAccessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint[]
     */
    private $sharedCallAppearanceAccessDeviceEndpoint = array(
        
    );

    /**
     * @ElementName title
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    private $title = null;

    /**
     * @ElementName pagerPhoneNumber
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $pagerPhoneNumber = null;

    /**
     * @ElementName mobilePhoneNumber
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $mobilePhoneNumber = null;

    /**
     * @ElementName emailAddress
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $emailAddress = null;

    /**
     * @ElementName yahooId
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    private $yahooId = null;

    /**
     * @ElementName addressLocation
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $addressLocation = null;

    /**
     * @ElementName address
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StreetAddress
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @var \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    private $address = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * @ElementName userService
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[]
     */
    private $userService = array(
        
    );

    /**
     * @ElementName servicePack
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedServicePackAssignment
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedServicePackAssignment[]
     */
    private $servicePack = array(
        
    );

    /**
     * @ElementName thirdPartyVoiceMailServerSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportServerSelection
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @var \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportServerSelection|null
     */
    private $thirdPartyVoiceMailServerSelection = null;

    /**
     * @ElementName thirdPartyVoiceMailServerUserServer
     * @Type string
     * @Nillable
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thirdPartyVoiceMailServerUserServer = null;

    /**
     * @ElementName thirdPartyVoiceMailServerMailboxIdType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportMailboxIdType
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @var \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportMailboxIdType|null
     */
    private $thirdPartyVoiceMailServerMailboxIdType = null;

    /**
     * @ElementName thirdPartyVoiceMailMailboxURL
     * @Type string
     * @Nillable
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $thirdPartyVoiceMailMailboxURL = null;

    /**
     * @ElementName sipAuthenticationData
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SIPAuthenticationUserNamePassword
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1270
     * @var \CWM\BroadWorksConnector\Ocip\Models\SIPAuthenticationUserNamePassword|null
     */
    private $sipAuthenticationData = null;

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
     * Getter for groupProperties
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedGroupProperties
     */
    public function getGroupProperties()
    {
        return $this->groupProperties instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupProperties;
    }

    /**
     * Setter for groupProperties
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedGroupProperties $groupProperties
     * @return $this
     */
    public function setGroupProperties(\CWM\BroadWorksConnector\Ocip\Models\ConsolidatedGroupProperties $groupProperties)
    {
        $this->groupProperties = $groupProperties;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupProperties()
    {
        $this->groupProperties = null;
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
     * Getter for addPhoneNumberToGroup
     *
     * @return bool
     */
    public function getAddPhoneNumberToGroup()
    {
        return $this->addPhoneNumberToGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->addPhoneNumberToGroup;
    }

    /**
     * Setter for addPhoneNumberToGroup
     *
     * @param bool $addPhoneNumberToGroup
     * @return $this
     */
    public function setAddPhoneNumberToGroup($addPhoneNumberToGroup)
    {
        $this->addPhoneNumberToGroup = $addPhoneNumberToGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAddPhoneNumberToGroup()
    {
        $this->addPhoneNumberToGroup = null;
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
     * Getter for passcode
     *
     * @return string
     */
    public function getPasscode()
    {
        return $this->passcode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->passcode;
    }

    /**
     * Setter for passcode
     *
     * @param string $passcode
     * @return $this
     */
    public function setPasscode($passcode)
    {
        $this->passcode = $passcode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPasscode()
    {
        $this->passcode = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedAccessDeviceMultipleIdentityEndpointAndContactAdd
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedAccessDeviceMultipleIdentityEndpointAndContactAdd $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\ConsolidatedAccessDeviceMultipleIdentityEndpointAndContactAdd $accessDeviceEndpoint)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactAdd
     */
    public function getTrunkAddressing()
    {
        return $this->trunkAddressing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkAddressing;
    }

    /**
     * Setter for trunkAddressing
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactAdd $trunkAddressing
     * @return $this
     */
    public function setTrunkAddressing(\CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactAdd $trunkAddressing)
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
     * Getter for sharedCallAppearanceAccessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint[]
     */
    public function getSharedCallAppearanceAccessDeviceEndpoint()
    {
        return $this->sharedCallAppearanceAccessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sharedCallAppearanceAccessDeviceEndpoint;
    }

    /**
     * Setter for sharedCallAppearanceAccessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint[] $sharedCallAppearanceAccessDeviceEndpoint
     * @return $this
     */
    public function setSharedCallAppearanceAccessDeviceEndpoint(array $sharedCallAppearanceAccessDeviceEndpoint)
    {
        $this->sharedCallAppearanceAccessDeviceEndpoint = $sharedCallAppearanceAccessDeviceEndpoint;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSharedCallAppearanceAccessDeviceEndpoint()
    {
        $this->sharedCallAppearanceAccessDeviceEndpoint = null;
        return $this;
    }

    /**
     * Adder for sharedCallAppearanceAccessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint $sharedCallAppearanceAccessDeviceEndpoint
     * @return $this
     */
    public function addSharedCallAppearanceAccessDeviceEndpoint($sharedCallAppearanceAccessDeviceEndpoint)
    {
        $this->sharedCallAppearanceAccessDeviceEndpoint[] = $sharedCallAppearanceAccessDeviceEndpoint;
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
     * Getter for userService
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[]
     */
    public function getUserService()
    {
        return $this->userService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userService;
    }

    /**
     * Setter for userService
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[] $userService
     * @return $this
     */
    public function setUserService(array $userService)
    {
        $this->userService = $userService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserService()
    {
        $this->userService = null;
        return $this;
    }

    /**
     * Adder for userService
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment $userService
     * @return $this
     */
    public function addUserService($userService)
    {
        $this->userService[] = $userService;
        return $this;
    }

    /**
     * Getter for servicePack
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedServicePackAssignment[]
     */
    public function getServicePack()
    {
        return $this->servicePack instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePack;
    }

    /**
     * Setter for servicePack
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedServicePackAssignment[] $servicePack
     * @return $this
     */
    public function setServicePack(array $servicePack)
    {
        $this->servicePack = $servicePack;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePack()
    {
        $this->servicePack = null;
        return $this;
    }

    /**
     * Adder for servicePack
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedServicePackAssignment $servicePack
     * @return $this
     */
    public function addServicePack($servicePack)
    {
        $this->servicePack[] = $servicePack;
        return $this;
    }

    /**
     * Getter for thirdPartyVoiceMailServerSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportServerSelection
     */
    public function getThirdPartyVoiceMailServerSelection()
    {
        return $this->thirdPartyVoiceMailServerSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thirdPartyVoiceMailServerSelection;
    }

    /**
     * Setter for thirdPartyVoiceMailServerSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportServerSelection $thirdPartyVoiceMailServerSelection
     * @return $this
     */
    public function setThirdPartyVoiceMailServerSelection(\CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportServerSelection $thirdPartyVoiceMailServerSelection)
    {
        $this->thirdPartyVoiceMailServerSelection = $thirdPartyVoiceMailServerSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThirdPartyVoiceMailServerSelection()
    {
        $this->thirdPartyVoiceMailServerSelection = null;
        return $this;
    }

    /**
     * Getter for thirdPartyVoiceMailServerUserServer
     *
     * @return string|null
     */
    public function getThirdPartyVoiceMailServerUserServer()
    {
        return $this->thirdPartyVoiceMailServerUserServer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thirdPartyVoiceMailServerUserServer;
    }

    /**
     * Setter for thirdPartyVoiceMailServerUserServer
     *
     * @param string|null $thirdPartyVoiceMailServerUserServer
     * @return $this
     */
    public function setThirdPartyVoiceMailServerUserServer($thirdPartyVoiceMailServerUserServer = null)
    {
        if ($thirdPartyVoiceMailServerUserServer === null) {
            $this->thirdPartyVoiceMailServerUserServer = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thirdPartyVoiceMailServerUserServer = $thirdPartyVoiceMailServerUserServer;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThirdPartyVoiceMailServerUserServer()
    {
        $this->thirdPartyVoiceMailServerUserServer = null;
        return $this;
    }

    /**
     * Getter for thirdPartyVoiceMailServerMailboxIdType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportMailboxIdType
     */
    public function getThirdPartyVoiceMailServerMailboxIdType()
    {
        return $this->thirdPartyVoiceMailServerMailboxIdType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thirdPartyVoiceMailServerMailboxIdType;
    }

    /**
     * Setter for thirdPartyVoiceMailServerMailboxIdType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportMailboxIdType $thirdPartyVoiceMailServerMailboxIdType
     * @return $this
     */
    public function setThirdPartyVoiceMailServerMailboxIdType(\CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportMailboxIdType $thirdPartyVoiceMailServerMailboxIdType)
    {
        $this->thirdPartyVoiceMailServerMailboxIdType = $thirdPartyVoiceMailServerMailboxIdType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThirdPartyVoiceMailServerMailboxIdType()
    {
        $this->thirdPartyVoiceMailServerMailboxIdType = null;
        return $this;
    }

    /**
     * Getter for thirdPartyVoiceMailMailboxURL
     *
     * @return string|null
     */
    public function getThirdPartyVoiceMailMailboxURL()
    {
        return $this->thirdPartyVoiceMailMailboxURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thirdPartyVoiceMailMailboxURL;
    }

    /**
     * Setter for thirdPartyVoiceMailMailboxURL
     *
     * @param string|null $thirdPartyVoiceMailMailboxURL
     * @return $this
     */
    public function setThirdPartyVoiceMailMailboxURL($thirdPartyVoiceMailMailboxURL = null)
    {
        if ($thirdPartyVoiceMailMailboxURL === null) {
            $this->thirdPartyVoiceMailMailboxURL = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->thirdPartyVoiceMailMailboxURL = $thirdPartyVoiceMailMailboxURL;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThirdPartyVoiceMailMailboxURL()
    {
        $this->thirdPartyVoiceMailMailboxURL = null;
        return $this;
    }

    /**
     * Getter for sipAuthenticationData
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SIPAuthenticationUserNamePassword
     */
    public function getSipAuthenticationData()
    {
        return $this->sipAuthenticationData instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipAuthenticationData;
    }

    /**
     * Setter for sipAuthenticationData
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SIPAuthenticationUserNamePassword $sipAuthenticationData
     * @return $this
     */
    public function setSipAuthenticationData(\CWM\BroadWorksConnector\Ocip\Models\SIPAuthenticationUserNamePassword $sipAuthenticationData)
    {
        $this->sipAuthenticationData = $sipAuthenticationData;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipAuthenticationData()
    {
        $this->sipAuthenticationData = null;
        return $this;
    }


}

