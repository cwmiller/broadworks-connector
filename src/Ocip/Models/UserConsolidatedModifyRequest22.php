<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserConsolidatedModifyRequest22
 *
 * Request to modify a user.
 *
 *         If deleteExistingDevices is set to true, when the devices for the main endpoint or SCA service are changed, devices with no more endpoint will be deleted if the command is executed with the correct privilege.
 *         Group administrator or above running this command can delete any group level devices. 
 *         Service provider administrator or above can delete any service provider and group devices. 
 *         Provisioning administrator or above can delete any devices. 
 *         An ErrorResponse will be returned if any device cannot be deleted because of insufficient privilege.
 *       
 *         When phone numbers are un-assigned from the user, the unused numbers may be un-assigned from the group and service provider. If UnassignPhoneNumbersLevel is set to 'Group', the user's primary phone number, fax number and any alternate numbers, will be un-assigned from the group if the command is executed by a service provider administrator or above.
 *         When set to 'Service Provider', they will be un-assigned from the group and service provider if the command is executed by a provisioning administrator or above.
 *         When omitted, the number(s) will be left assigned to the group.
 *         An ErrorResponse will be returned if any number cannot be unassigned because of insufficient privilege. 
 *
 *        If the phoneNumber has not been assigned to the group and addPhoneNumberToGroup is set to true, it will be added to group if needed if the command is executed by a service provider administrator and above. The command will fail otherwise.
 *       
 *         Alternate user ids can be added by a group level administrator or above.
 *       
 *         The password is not required if external authentication is enabled.
 *         When sharedCallAppearanceAccessDeviceEndpoint element is included and the Shared Call Appearance service is not assigned after this request, the request will fail.
 *       
 *         The userService/servicePackwill be authorized to the group if it has not been authorized to the group and the command is excuted by a service provider administrator. The request will fail otherwise. 
 *         If not present, the authorizedQuantity will be set to unlimited if allowed.
 *       
 *         If any of the third party voice mail elements are included but the service is not assigned after this request, the request will fail.
 *       
 *          If the sip authentication elements are included but the SPI Authentication service is not assigned after this request, the request will fail.
 *
 *          If the impPassword element is included but the Integrated IMP service is not assigned after this request, the request will fail.
 *
 *
 *          The following elements are ignored in XS data mode:
 *           nameDialingName 
 *           alternateUserIdList
 *           passcode
 *           trunkAddressing
 *           thirdPartyVoiceMailServerSelection
 *           thirdPartyVoiceMailServerUserServer
 *           thirdPartyVoiceMailServerMailboxIdType
 *           thirdPartyVoiceMailMailboxURL
 *           sipAuthenticationData
 *           newUserExternalId
 *
 *          The response is either SuccessResponse or ErrorResponse.
 *
 * @see ErrorResponse
 * @see ErrorResponse
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:1468","type":"sequence"}]
 */
class UserConsolidatedModifyRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName deleteExistingDevices
     * @Type bool
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @var bool|null
     */
    protected $deleteExistingDevices = null;

    /**
     * @ElementName unassignPhoneNumbers
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel|null
     */
    protected $unassignPhoneNumbers = null;

    /**
     * @ElementName addPhoneNumberToGroup
     * @Type bool
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @var bool|null
     */
    protected $addPhoneNumberToGroup = null;

    /**
     * @ElementName newUserId
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $newUserId = null;

    /**
     * @ElementName lastName
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $lastName = null;

    /**
     * @ElementName firstName
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $firstName = null;

    /**
     * @ElementName callingLineIdLastName
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $callingLineIdLastName = null;

    /**
     * @ElementName callingLineIdFirstName
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $callingLineIdFirstName = null;

    /**
     * @ElementName nameDialingName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NameDialingName
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @var \CWM\BroadWorksConnector\Ocip\Models\NameDialingName|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $nameDialingName = null;

    /**
     * @ElementName hiraganaLastName
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $hiraganaLastName = null;

    /**
     * @ElementName hiraganaFirstName
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $hiraganaFirstName = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 23
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $phoneNumber = null;

    /**
     * @ElementName alternateUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementAlternateUserIdEntryList
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementAlternateUserIdEntryList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $alternateUserIdList = null;

    /**
     * @ElementName extension
     * @Type string
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 2
     * @MaxLength 20
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $extension = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 23
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $callingLineIdPhoneNumber = null;

    /**
     * @ElementName oldPassword
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $oldPassword = null;

    /**
     * @ElementName newPassword
     * @Type string
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 60
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $newPassword = null;

    /**
     * @ElementName department
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Nillable
     * @Abstract \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey,\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $department = null;

    /**
     * @ElementName language
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $language = null;

    /**
     * @ElementName timeZone
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    protected $timeZone = null;

    /**
     * @ElementName sipAliasList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementSIPAliasList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $sipAliasList = null;

    /**
     * @ElementName endpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserConsolidatedModifyRequest22Endpoint
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserConsolidatedModifyRequest22Endpoint|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $endpoint = null;

    /**
     * @ElementName sharedCallAppearanceAccessDeviceEndpointList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointList22
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointList22|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $sharedCallAppearanceAccessDeviceEndpointList = null;

    /**
     * @ElementName title
     * @Type string
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 50
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $title = null;

    /**
     * @ElementName pagerPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $pagerPhoneNumber = null;

    /**
     * @ElementName mobilePhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $mobilePhoneNumber = null;

    /**
     * @ElementName emailAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $emailAddress = null;

    /**
     * @ElementName yahooId
     * @Type string
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 50
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $yahooId = null;

    /**
     * @ElementName addressLocation
     * @Type string
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $addressLocation = null;

    /**
     * @ElementName address
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StreetAddress
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @var \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    protected $address = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

    /**
     * @ElementName userServiceList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $userServiceList = null;

    /**
     * @ElementName servicePackList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedServicePackAssignmentList
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedServicePackAssignmentList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $servicePackList = null;

    /**
     * @ElementName thirdPartyVoiceMailServerSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportServerSelection
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @var \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportServerSelection|null
     */
    protected $thirdPartyVoiceMailServerSelection = null;

    /**
     * @ElementName thirdPartyVoiceMailServerUserServer
     * @Type string
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $thirdPartyVoiceMailServerUserServer = null;

    /**
     * @ElementName thirdPartyVoiceMailServerMailboxIdType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportMailboxIdType
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @var \CWM\BroadWorksConnector\Ocip\Models\ThirdPartyVoiceMailSupportMailboxIdType|null
     */
    protected $thirdPartyVoiceMailServerMailboxIdType = null;

    /**
     * @ElementName thirdPartyVoiceMailMailboxURL
     * @Type string
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $thirdPartyVoiceMailMailboxURL = null;

    /**
     * @ElementName sipAuthenticationUserName
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $sipAuthenticationUserName = null;

    /**
     * @ElementName newSipAuthenticationPassword
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $newSipAuthenticationPassword = null;

    /**
     * @ElementName OldSipAuthenticationPassword
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $OldSipAuthenticationPassword = null;

    /**
     * @ElementName newPasscode
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $newPasscode = null;

    /**
     * @ElementName oldPasscode
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $oldPasscode = null;

    /**
     * @ElementName impPassword
     * @Type string
     * @Nillable
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MinLength 1
     * @MaxLength 60
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $impPassword = null;

    /**
     * @ElementName newUserExternalId
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1468
     * @MaxLength 36
     * @var string|null
     */
    protected $newUserExternalId = null;

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
     * Getter for deleteExistingDevices
     *
     * @return bool
     */
    public function getDeleteExistingDevices()
    {
        return $this->deleteExistingDevices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteExistingDevices;
    }

    /**
     * Setter for deleteExistingDevices
     *
     * @param bool $deleteExistingDevices
     * @return $this
     */
    public function setDeleteExistingDevices($deleteExistingDevices)
    {
        $this->deleteExistingDevices = $deleteExistingDevices;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeleteExistingDevices()
    {
        $this->deleteExistingDevices = null;
        return $this;
    }

    /**
     * Getter for unassignPhoneNumbers
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel
     */
    public function getUnassignPhoneNumbers()
    {
        return $this->unassignPhoneNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unassignPhoneNumbers;
    }

    /**
     * Setter for unassignPhoneNumbers
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel $unassignPhoneNumbers
     * @return $this
     */
    public function setUnassignPhoneNumbers(\CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel $unassignPhoneNumbers)
    {
        $this->unassignPhoneNumbers = $unassignPhoneNumbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnassignPhoneNumbers()
    {
        $this->unassignPhoneNumbers = null;
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
     * Getter for newUserId
     *
     * @return string
     */
    public function getNewUserId()
    {
        return $this->newUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newUserId;
    }

    /**
     * Setter for newUserId
     *
     * @param string $newUserId
     * @return $this
     */
    public function setNewUserId($newUserId)
    {
        $this->newUserId = $newUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewUserId()
    {
        $this->newUserId = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\NameDialingName|null
     */
    public function getNameDialingName()
    {
        return $this->nameDialingName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nameDialingName;
    }

    /**
     * Setter for nameDialingName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NameDialingName|null $nameDialingName
     * @return $this
     */
    public function setNameDialingName(\CWM\BroadWorksConnector\Ocip\Models\NameDialingName $nameDialingName = null)
    {
        if ($nameDialingName === null) {
            $this->nameDialingName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->nameDialingName = $nameDialingName;
        }
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
     * Getter for alternateUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementAlternateUserIdEntryList|null
     */
    public function getAlternateUserIdList()
    {
        return $this->alternateUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateUserIdList;
    }

    /**
     * Setter for alternateUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementAlternateUserIdEntryList|null $alternateUserIdList
     * @return $this
     */
    public function setAlternateUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementAlternateUserIdEntryList $alternateUserIdList = null)
    {
        if ($alternateUserIdList === null) {
            $this->alternateUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->alternateUserIdList = $alternateUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateUserIdList()
    {
        $this->alternateUserIdList = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserConsolidatedModifyRequest22Endpoint|null
     */
    public function getEndpoint()
    {
        return $this->endpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endpoint;
    }

    /**
     * Setter for endpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserConsolidatedModifyRequest22Endpoint|null $endpoint
     * @return $this
     */
    public function setEndpoint(\CWM\BroadWorksConnector\Ocip\Models\UserConsolidatedModifyRequest22Endpoint $endpoint = null)
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
     * Getter for sharedCallAppearanceAccessDeviceEndpointList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointList22|null
     */
    public function getSharedCallAppearanceAccessDeviceEndpointList()
    {
        return $this->sharedCallAppearanceAccessDeviceEndpointList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sharedCallAppearanceAccessDeviceEndpointList;
    }

    /**
     * Setter for sharedCallAppearanceAccessDeviceEndpointList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointList22|null $sharedCallAppearanceAccessDeviceEndpointList
     * @return $this
     */
    public function setSharedCallAppearanceAccessDeviceEndpointList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointList22 $sharedCallAppearanceAccessDeviceEndpointList = null)
    {
        if ($sharedCallAppearanceAccessDeviceEndpointList === null) {
            $this->sharedCallAppearanceAccessDeviceEndpointList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->sharedCallAppearanceAccessDeviceEndpointList = $sharedCallAppearanceAccessDeviceEndpointList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSharedCallAppearanceAccessDeviceEndpointList()
    {
        $this->sharedCallAppearanceAccessDeviceEndpointList = null;
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
     * Getter for userServiceList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList|null
     */
    public function getUserServiceList()
    {
        return $this->userServiceList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userServiceList;
    }

    /**
     * Setter for userServiceList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList|null $userServiceList
     * @return $this
     */
    public function setUserServiceList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList $userServiceList = null)
    {
        if ($userServiceList === null) {
            $this->userServiceList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->userServiceList = $userServiceList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserServiceList()
    {
        $this->userServiceList = null;
        return $this;
    }

    /**
     * Getter for servicePackList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedServicePackAssignmentList|null
     */
    public function getServicePackList()
    {
        return $this->servicePackList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackList;
    }

    /**
     * Setter for servicePackList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedServicePackAssignmentList|null $servicePackList
     * @return $this
     */
    public function setServicePackList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedServicePackAssignmentList $servicePackList = null)
    {
        if ($servicePackList === null) {
            $this->servicePackList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->servicePackList = $servicePackList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackList()
    {
        $this->servicePackList = null;
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
     * Getter for sipAuthenticationUserName
     *
     * @return string
     */
    public function getSipAuthenticationUserName()
    {
        return $this->sipAuthenticationUserName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipAuthenticationUserName;
    }

    /**
     * Setter for sipAuthenticationUserName
     *
     * @param string $sipAuthenticationUserName
     * @return $this
     */
    public function setSipAuthenticationUserName($sipAuthenticationUserName)
    {
        $this->sipAuthenticationUserName = $sipAuthenticationUserName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipAuthenticationUserName()
    {
        $this->sipAuthenticationUserName = null;
        return $this;
    }

    /**
     * Getter for newSipAuthenticationPassword
     *
     * @return string
     */
    public function getNewSipAuthenticationPassword()
    {
        return $this->newSipAuthenticationPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newSipAuthenticationPassword;
    }

    /**
     * Setter for newSipAuthenticationPassword
     *
     * @param string $newSipAuthenticationPassword
     * @return $this
     */
    public function setNewSipAuthenticationPassword($newSipAuthenticationPassword)
    {
        $this->newSipAuthenticationPassword = $newSipAuthenticationPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewSipAuthenticationPassword()
    {
        $this->newSipAuthenticationPassword = null;
        return $this;
    }

    /**
     * Getter for OldSipAuthenticationPassword
     *
     * @return string
     */
    public function getOldSipAuthenticationPassword()
    {
        return $this->OldSipAuthenticationPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->OldSipAuthenticationPassword;
    }

    /**
     * Setter for OldSipAuthenticationPassword
     *
     * @param string $OldSipAuthenticationPassword
     * @return $this
     */
    public function setOldSipAuthenticationPassword($OldSipAuthenticationPassword)
    {
        $this->OldSipAuthenticationPassword = $OldSipAuthenticationPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOldSipAuthenticationPassword()
    {
        $this->OldSipAuthenticationPassword = null;
        return $this;
    }

    /**
     * Getter for newPasscode
     *
     * @return string
     */
    public function getNewPasscode()
    {
        return $this->newPasscode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newPasscode;
    }

    /**
     * Setter for newPasscode
     *
     * @param string $newPasscode
     * @return $this
     */
    public function setNewPasscode($newPasscode)
    {
        $this->newPasscode = $newPasscode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewPasscode()
    {
        $this->newPasscode = null;
        return $this;
    }

    /**
     * Getter for oldPasscode
     *
     * @return string
     */
    public function getOldPasscode()
    {
        return $this->oldPasscode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->oldPasscode;
    }

    /**
     * Setter for oldPasscode
     *
     * @param string $oldPasscode
     * @return $this
     */
    public function setOldPasscode($oldPasscode)
    {
        $this->oldPasscode = $oldPasscode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOldPasscode()
    {
        $this->oldPasscode = null;
        return $this;
    }

    /**
     * Getter for impPassword
     *
     * @return string|null
     */
    public function getImpPassword()
    {
        return $this->impPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->impPassword;
    }

    /**
     * Setter for impPassword
     *
     * @param string|null $impPassword
     * @return $this
     */
    public function setImpPassword($impPassword = null)
    {
        if ($impPassword === null) {
            $this->impPassword = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->impPassword = $impPassword;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetImpPassword()
    {
        $this->impPassword = null;
        return $this;
    }

    /**
     * Getter for newUserExternalId
     *
     * @return string
     */
    public function getNewUserExternalId()
    {
        return $this->newUserExternalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newUserExternalId;
    }

    /**
     * Setter for newUserExternalId
     *
     * @param string $newUserExternalId
     * @return $this
     */
    public function setNewUserExternalId($newUserExternalId)
    {
        $this->newUserExternalId = $newUserExternalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewUserExternalId()
    {
        $this->newUserExternalId = null;
        return $this;
    }
}

