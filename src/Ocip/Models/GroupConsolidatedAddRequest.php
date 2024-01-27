<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupConsolidatedAddRequest
 *
 * Add a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           serviceProviderExternalId
 *           groupExternalId
 *         
 *         The following elements are ignored in AS and XS data mode:
 *         servicePolicy,
 *         callProcessingSliceId, 
 *         provisioningSliceId, 
 *         subscriberPartition.
 *         
 *         The following elements are only used in XS data mode and ignored in AS mode:
 *         preferredDataCenter.
 *         Only Provisioning admin and above can change the preferredDataCenter.
 *         
 *         The following elements are only used in XS data mode and ignored in AS data mode:
 *         defaultUserCallingLineIdPhoneNumber.
 *         
 *         The following elements are optional for the group. If the elements are included,
 *         they will be either added, authorized, or modified on the group. Should any of the 
 *         following elements be rejected to due existing system or service provider settings, 
 *         the group will not be added and the response will be an ErrorResponse:
 *           domain
 *           admin
 *           minExtensionLength
 *           maxExtensionLength
 *           defaultExtensionLength
 *           servicePackAuthorization
 *           groupServiceAuthorizationAndAssignment
 *           userServiceAuthorization
 *           servicePack
 *           activatablePhoneNumber
 *           activatableDNRange
 *           routingProfile
 *           trunkGroupMaxActiveCalls
 *           trunkGroupBurstingMaxActiveCalls
 *           meetMeConferencingAllocatedPorts
 *           
 *           
 *         When a group or user service is included that is not activated, is not licensed, 
 *         or not authorized to the service provider, the response will be an ErrorResponse.
 *         
 *         If the group service authorized quantity is not included it will default to Unlimited. 
 *                   
 *         If activatablePhoneNumber and activatableDNRange elements are included, when
 *         activate element is present, this value overrides the system group default 
 *         activatable settings.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:2897","type":"sequence","children":[{"id":"4b0e7857796c636464362260a2f8e5ee:2898","type":"choice"}]}]
 */
class GroupConsolidatedAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:2898
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName serviceProviderExternalId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:2898
     * @MaxLength 36
     * @var string|null
     */
    protected $serviceProviderExternalId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName groupExternalId
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MaxLength 36
     * @var string|null
     */
    protected $groupExternalId = null;

    /**
     * @ElementName defaultDomain
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $defaultDomain = null;

    /**
     * @ElementName userLimit
     * @Type int
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $userLimit = null;

    /**
     * @ElementName groupName
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $groupName = null;

    /**
     * @ElementName callingLineIdName
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $callingLineIdName = null;

    /**
     * @ElementName timeZone
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    protected $timeZone = null;

    /**
     * @ElementName locationDialingCode
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinLength 1
     * @MaxLength 15
     * @var string|null
     */
    protected $locationDialingCode = null;

    /**
     * @ElementName contact
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Contact
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @var \CWM\BroadWorksConnector\Ocip\Models\Contact|null
     */
    protected $contact = null;

    /**
     * @ElementName address
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StreetAddress
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @var \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    protected $address = null;

    /**
     * @ElementName servicePolicy
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $servicePolicy = null;

    /**
     * @ElementName callProcessingSliceId
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $callProcessingSliceId = null;

    /**
     * @ElementName provisioningSliceId
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $provisioningSliceId = null;

    /**
     * @ElementName subscriberPartition
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $subscriberPartition = null;

    /**
     * @ElementName preferredDataCenter
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $preferredDataCenter = null;

    /**
     * @ElementName defaultUserCallingLineIdPhoneNumber
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $defaultUserCallingLineIdPhoneNumber = null;

    /**
     * @ElementName domain
     * @Type string
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $domain = [
        
    ];

    /**
     * @ElementName admin
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdmin
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdmin[]
     */
    protected $admin = [
        
    ];

    /**
     * @ElementName minExtensionLength
     * @Type int
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    protected $minExtensionLength = null;

    /**
     * @ElementName maxExtensionLength
     * @Type int
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    protected $maxExtensionLength = null;

    /**
     * @ElementName defaultExtensionLength
     * @Type int
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    protected $defaultExtensionLength = null;

    /**
     * @ElementName groupServiceAuthorizationAndAssignment
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorizationAndAssignment
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorizationAndAssignment[]
     */
    protected $groupServiceAuthorizationAndAssignment = [
        
    ];

    /**
     * @ElementName userServiceAuthorization
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserServiceAuthorization
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserServiceAuthorization[]
     */
    protected $userServiceAuthorization = [
        
    ];

    /**
     * @ElementName servicePackAuthorization
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServicePackAuthorization
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServicePackAuthorization[]
     */
    protected $servicePackAuthorization = [
        
    ];

    /**
     * @ElementName activatablePhoneNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ActivatableDN
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @var \CWM\BroadWorksConnector\Ocip\Models\ActivatableDN[]
     */
    protected $activatablePhoneNumber = [
        
    ];

    /**
     * @ElementName activatableDNRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ActivatableDNRange
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @var \CWM\BroadWorksConnector\Ocip\Models\ActivatableDNRange[]
     */
    protected $activatableDNRange = [
        
    ];

    /**
     * @ElementName routingProfile
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @MinLength 4
     * @MaxLength 12
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $routingProfile = null;

    /**
     * @ElementName meetMeConferencingAllocatedPorts
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null
     */
    protected $meetMeConferencingAllocatedPorts = null;

    /**
     * @ElementName trunkGroupMaxActiveCalls
     * @Type int
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @var int|null
     */
    protected $trunkGroupMaxActiveCalls = null;

    /**
     * @ElementName trunkGroupBurstingMaxActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:2897
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    protected $trunkGroupBurstingMaxActiveCalls = null;

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
     * Getter for serviceProviderExternalId
     *
     * @return string
     */
    public function getServiceProviderExternalId()
    {
        return $this->serviceProviderExternalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderExternalId;
    }

    /**
     * Setter for serviceProviderExternalId
     *
     * @param string $serviceProviderExternalId
     * @return $this
     */
    public function setServiceProviderExternalId($serviceProviderExternalId)
    {
        $this->serviceProviderExternalId = $serviceProviderExternalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderExternalId()
    {
        $this->serviceProviderExternalId = null;
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
     * Getter for groupExternalId
     *
     * @return string
     */
    public function getGroupExternalId()
    {
        return $this->groupExternalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupExternalId;
    }

    /**
     * Setter for groupExternalId
     *
     * @param string $groupExternalId
     * @return $this
     */
    public function setGroupExternalId($groupExternalId)
    {
        $this->groupExternalId = $groupExternalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupExternalId()
    {
        $this->groupExternalId = null;
        return $this;
    }

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

    /**
     * Getter for servicePolicy
     *
     * @return string
     */
    public function getServicePolicy()
    {
        return $this->servicePolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePolicy;
    }

    /**
     * Setter for servicePolicy
     *
     * @param string $servicePolicy
     * @return $this
     */
    public function setServicePolicy($servicePolicy)
    {
        $this->servicePolicy = $servicePolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePolicy()
    {
        $this->servicePolicy = null;
        return $this;
    }

    /**
     * Getter for callProcessingSliceId
     *
     * @return string
     */
    public function getCallProcessingSliceId()
    {
        return $this->callProcessingSliceId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callProcessingSliceId;
    }

    /**
     * Setter for callProcessingSliceId
     *
     * @param string $callProcessingSliceId
     * @return $this
     */
    public function setCallProcessingSliceId($callProcessingSliceId)
    {
        $this->callProcessingSliceId = $callProcessingSliceId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallProcessingSliceId()
    {
        $this->callProcessingSliceId = null;
        return $this;
    }

    /**
     * Getter for provisioningSliceId
     *
     * @return string
     */
    public function getProvisioningSliceId()
    {
        return $this->provisioningSliceId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->provisioningSliceId;
    }

    /**
     * Setter for provisioningSliceId
     *
     * @param string $provisioningSliceId
     * @return $this
     */
    public function setProvisioningSliceId($provisioningSliceId)
    {
        $this->provisioningSliceId = $provisioningSliceId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProvisioningSliceId()
    {
        $this->provisioningSliceId = null;
        return $this;
    }

    /**
     * Getter for subscriberPartition
     *
     * @return string
     */
    public function getSubscriberPartition()
    {
        return $this->subscriberPartition instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->subscriberPartition;
    }

    /**
     * Setter for subscriberPartition
     *
     * @param string $subscriberPartition
     * @return $this
     */
    public function setSubscriberPartition($subscriberPartition)
    {
        $this->subscriberPartition = $subscriberPartition;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSubscriberPartition()
    {
        $this->subscriberPartition = null;
        return $this;
    }

    /**
     * Getter for preferredDataCenter
     *
     * @return string
     */
    public function getPreferredDataCenter()
    {
        return $this->preferredDataCenter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->preferredDataCenter;
    }

    /**
     * Setter for preferredDataCenter
     *
     * @param string $preferredDataCenter
     * @return $this
     */
    public function setPreferredDataCenter($preferredDataCenter)
    {
        $this->preferredDataCenter = $preferredDataCenter;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPreferredDataCenter()
    {
        $this->preferredDataCenter = null;
        return $this;
    }

    /**
     * Getter for defaultUserCallingLineIdPhoneNumber
     *
     * @return string
     */
    public function getDefaultUserCallingLineIdPhoneNumber()
    {
        return $this->defaultUserCallingLineIdPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultUserCallingLineIdPhoneNumber;
    }

    /**
     * Setter for defaultUserCallingLineIdPhoneNumber
     *
     * @param string $defaultUserCallingLineIdPhoneNumber
     * @return $this
     */
    public function setDefaultUserCallingLineIdPhoneNumber($defaultUserCallingLineIdPhoneNumber)
    {
        $this->defaultUserCallingLineIdPhoneNumber = $defaultUserCallingLineIdPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultUserCallingLineIdPhoneNumber()
    {
        $this->defaultUserCallingLineIdPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for domain
     *
     * @return string[]
     */
    public function getDomain()
    {
        return $this->domain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->domain;
    }

    /**
     * Setter for domain
     *
     * @param string[] $domain
     * @return $this
     */
    public function setDomain(array $domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDomain()
    {
        $this->domain = null;
        return $this;
    }

    /**
     * Adder for domain
     *
     * @param string $domain
     * @return $this
     */
    public function addDomain(string $domain)
    {
        $this->domain[] = $domain;
        return $this;
    }

    /**
     * Getter for admin
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdmin[]
     */
    public function getAdmin()
    {
        return $this->admin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->admin;
    }

    /**
     * Setter for admin
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdmin[] $admin
     * @return $this
     */
    public function setAdmin(array $admin)
    {
        $this->admin = $admin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAdmin()
    {
        $this->admin = null;
        return $this;
    }

    /**
     * Adder for admin
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdmin $admin
     * @return $this
     */
    public function addAdmin($admin)
    {
        $this->admin[] = $admin;
        return $this;
    }

    /**
     * Getter for minExtensionLength
     *
     * @return int
     */
    public function getMinExtensionLength()
    {
        return $this->minExtensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minExtensionLength;
    }

    /**
     * Setter for minExtensionLength
     *
     * @param int $minExtensionLength
     * @return $this
     */
    public function setMinExtensionLength($minExtensionLength)
    {
        $this->minExtensionLength = $minExtensionLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinExtensionLength()
    {
        $this->minExtensionLength = null;
        return $this;
    }

    /**
     * Getter for maxExtensionLength
     *
     * @return int
     */
    public function getMaxExtensionLength()
    {
        return $this->maxExtensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxExtensionLength;
    }

    /**
     * Setter for maxExtensionLength
     *
     * @param int $maxExtensionLength
     * @return $this
     */
    public function setMaxExtensionLength($maxExtensionLength)
    {
        $this->maxExtensionLength = $maxExtensionLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxExtensionLength()
    {
        $this->maxExtensionLength = null;
        return $this;
    }

    /**
     * Getter for defaultExtensionLength
     *
     * @return int
     */
    public function getDefaultExtensionLength()
    {
        return $this->defaultExtensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultExtensionLength;
    }

    /**
     * Setter for defaultExtensionLength
     *
     * @param int $defaultExtensionLength
     * @return $this
     */
    public function setDefaultExtensionLength($defaultExtensionLength)
    {
        $this->defaultExtensionLength = $defaultExtensionLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultExtensionLength()
    {
        $this->defaultExtensionLength = null;
        return $this;
    }

    /**
     * Getter for groupServiceAuthorizationAndAssignment
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorizationAndAssignment[]
     */
    public function getGroupServiceAuthorizationAndAssignment()
    {
        return $this->groupServiceAuthorizationAndAssignment instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupServiceAuthorizationAndAssignment;
    }

    /**
     * Setter for groupServiceAuthorizationAndAssignment
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorizationAndAssignment[] $groupServiceAuthorizationAndAssignment
     * @return $this
     */
    public function setGroupServiceAuthorizationAndAssignment(array $groupServiceAuthorizationAndAssignment)
    {
        $this->groupServiceAuthorizationAndAssignment = $groupServiceAuthorizationAndAssignment;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupServiceAuthorizationAndAssignment()
    {
        $this->groupServiceAuthorizationAndAssignment = null;
        return $this;
    }

    /**
     * Adder for groupServiceAuthorizationAndAssignment
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorizationAndAssignment $groupServiceAuthorizationAndAssignment
     * @return $this
     */
    public function addGroupServiceAuthorizationAndAssignment($groupServiceAuthorizationAndAssignment)
    {
        $this->groupServiceAuthorizationAndAssignment[] = $groupServiceAuthorizationAndAssignment;
        return $this;
    }

    /**
     * Getter for userServiceAuthorization
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserServiceAuthorization[]
     */
    public function getUserServiceAuthorization()
    {
        return $this->userServiceAuthorization instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userServiceAuthorization;
    }

    /**
     * Setter for userServiceAuthorization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserServiceAuthorization[] $userServiceAuthorization
     * @return $this
     */
    public function setUserServiceAuthorization(array $userServiceAuthorization)
    {
        $this->userServiceAuthorization = $userServiceAuthorization;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserServiceAuthorization()
    {
        $this->userServiceAuthorization = null;
        return $this;
    }

    /**
     * Adder for userServiceAuthorization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserServiceAuthorization $userServiceAuthorization
     * @return $this
     */
    public function addUserServiceAuthorization($userServiceAuthorization)
    {
        $this->userServiceAuthorization[] = $userServiceAuthorization;
        return $this;
    }

    /**
     * Getter for servicePackAuthorization
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServicePackAuthorization[]
     */
    public function getServicePackAuthorization()
    {
        return $this->servicePackAuthorization instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackAuthorization;
    }

    /**
     * Setter for servicePackAuthorization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServicePackAuthorization[] $servicePackAuthorization
     * @return $this
     */
    public function setServicePackAuthorization(array $servicePackAuthorization)
    {
        $this->servicePackAuthorization = $servicePackAuthorization;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackAuthorization()
    {
        $this->servicePackAuthorization = null;
        return $this;
    }

    /**
     * Adder for servicePackAuthorization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServicePackAuthorization $servicePackAuthorization
     * @return $this
     */
    public function addServicePackAuthorization($servicePackAuthorization)
    {
        $this->servicePackAuthorization[] = $servicePackAuthorization;
        return $this;
    }

    /**
     * Getter for activatablePhoneNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ActivatableDN[]
     */
    public function getActivatablePhoneNumber()
    {
        return $this->activatablePhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activatablePhoneNumber;
    }

    /**
     * Setter for activatablePhoneNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ActivatableDN[] $activatablePhoneNumber
     * @return $this
     */
    public function setActivatablePhoneNumber(array $activatablePhoneNumber)
    {
        $this->activatablePhoneNumber = $activatablePhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivatablePhoneNumber()
    {
        $this->activatablePhoneNumber = null;
        return $this;
    }

    /**
     * Adder for activatablePhoneNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ActivatableDN $activatablePhoneNumber
     * @return $this
     */
    public function addActivatablePhoneNumber($activatablePhoneNumber)
    {
        $this->activatablePhoneNumber[] = $activatablePhoneNumber;
        return $this;
    }

    /**
     * Getter for activatableDNRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ActivatableDNRange[]
     */
    public function getActivatableDNRange()
    {
        return $this->activatableDNRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activatableDNRange;
    }

    /**
     * Setter for activatableDNRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ActivatableDNRange[] $activatableDNRange
     * @return $this
     */
    public function setActivatableDNRange(array $activatableDNRange)
    {
        $this->activatableDNRange = $activatableDNRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivatableDNRange()
    {
        $this->activatableDNRange = null;
        return $this;
    }

    /**
     * Adder for activatableDNRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ActivatableDNRange $activatableDNRange
     * @return $this
     */
    public function addActivatableDNRange($activatableDNRange)
    {
        $this->activatableDNRange[] = $activatableDNRange;
        return $this;
    }

    /**
     * Getter for routingProfile
     *
     * @return string|null
     */
    public function getRoutingProfile()
    {
        return $this->routingProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routingProfile;
    }

    /**
     * Setter for routingProfile
     *
     * @param string|null $routingProfile
     * @return $this
     */
    public function setRoutingProfile($routingProfile = null)
    {
        if ($routingProfile === null) {
            $this->routingProfile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->routingProfile = $routingProfile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoutingProfile()
    {
        $this->routingProfile = null;
        return $this;
    }

    /**
     * Getter for meetMeConferencingAllocatedPorts
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts
     */
    public function getMeetMeConferencingAllocatedPorts()
    {
        return $this->meetMeConferencingAllocatedPorts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->meetMeConferencingAllocatedPorts;
    }

    /**
     * Setter for meetMeConferencingAllocatedPorts
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts $meetMeConferencingAllocatedPorts
     * @return $this
     */
    public function setMeetMeConferencingAllocatedPorts(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts $meetMeConferencingAllocatedPorts)
    {
        $this->meetMeConferencingAllocatedPorts = $meetMeConferencingAllocatedPorts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMeetMeConferencingAllocatedPorts()
    {
        $this->meetMeConferencingAllocatedPorts = null;
        return $this;
    }

    /**
     * Getter for trunkGroupMaxActiveCalls
     *
     * @return int
     */
    public function getTrunkGroupMaxActiveCalls()
    {
        return $this->trunkGroupMaxActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupMaxActiveCalls;
    }

    /**
     * Setter for trunkGroupMaxActiveCalls
     *
     * @param int $trunkGroupMaxActiveCalls
     * @return $this
     */
    public function setTrunkGroupMaxActiveCalls($trunkGroupMaxActiveCalls)
    {
        $this->trunkGroupMaxActiveCalls = $trunkGroupMaxActiveCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupMaxActiveCalls()
    {
        $this->trunkGroupMaxActiveCalls = null;
        return $this;
    }

    /**
     * Getter for trunkGroupBurstingMaxActiveCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     */
    public function getTrunkGroupBurstingMaxActiveCalls()
    {
        return $this->trunkGroupBurstingMaxActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupBurstingMaxActiveCalls;
    }

    /**
     * Setter for trunkGroupBurstingMaxActiveCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $trunkGroupBurstingMaxActiveCalls
     * @return $this
     */
    public function setTrunkGroupBurstingMaxActiveCalls(\CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $trunkGroupBurstingMaxActiveCalls)
    {
        $this->trunkGroupBurstingMaxActiveCalls = $trunkGroupBurstingMaxActiveCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupBurstingMaxActiveCalls()
    {
        $this->trunkGroupBurstingMaxActiveCalls = null;
        return $this;
    }
}

