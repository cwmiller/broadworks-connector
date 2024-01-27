<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderConsolidatedAddRequest
 *
 * Add a service provider or enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           serviceProviderExtenalId
 *           provisioningSliceId
 *         
 *         The following elements are ignored in AS and XS data mode:
 *         servicePolicy,
 *         callProcessingSliceId,
 *         subscriberPartition.
 *         
 *         Only Provisioning admin and above can change the preferredDataCenter and provisioningSliceId. 
 *         
 *         The following data elements are only used in AS data mode:
 *           resellerId   
 *           resellerName
 *         
 *         The following elements are optional for the service provider. If the elements are included,
 *         they will be either added, authorized, or modified on the service provider. Should any of the 
 *         following elements be rejected to due existing system settings, the service provider will not 
 *         be added and the response will be an ErrorResponse:
 *           domain
 *           admin
 *           groupServiceAuthorization
 *           userServiceAuthorization
 *           servicePack
 *           phoneNumber
 *           dnRange
 *           routingProfile
 *           meetMeConferencingAllocatedPorts
 *           trunkGroupMaxActiveCalls
 *           trunkGroupBurstingMaxActiveCalls
 *           voiceMessagingGroupSettings
 *           voiceMessagingVoicePortalScope
 *           
 *         When a group or user service is included that is not activated or is not licensed,
 *         the response will be an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:2726","type":"sequence","children":[{"id":"e19a9072c2dad499e9f28837da5768db:2727","type":"choice"}]}]
 */
class ServiceProviderConsolidatedAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName isEnterprise
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:2727
     * @var bool|null
     */
    protected $isEnterprise = null;

    /**
     * @ElementName useCustomRoutingProfile
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:2727
     * @var bool|null
     */
    protected $useCustomRoutingProfile = null;

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName serviceProviderExternalId
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @MaxLength 36
     * @var string|null
     */
    protected $serviceProviderExternalId = null;

    /**
     * @ElementName defaultDomain
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $defaultDomain = null;

    /**
     * @ElementName serviceProviderName
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $serviceProviderName = null;

    /**
     * @ElementName supportEmail
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $supportEmail = null;

    /**
     * @ElementName contact
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Contact
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @var \CWM\BroadWorksConnector\Ocip\Models\Contact|null
     */
    protected $contact = null;

    /**
     * @ElementName address
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StreetAddress
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @var \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    protected $address = null;

    /**
     * @ElementName servicePolicy
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $servicePolicy = null;

    /**
     * @ElementName callProcessingSliceId
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $callProcessingSliceId = null;

    /**
     * @ElementName provisioningSliceId
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $provisioningSliceId = null;

    /**
     * @ElementName subscriberPartition
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $subscriberPartition = null;

    /**
     * @ElementName preferredDataCenter
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $preferredDataCenter = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName resellerName
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @MinLength 1
     * @MaxLength 320
     * @var string|null
     */
    protected $resellerName = null;

    /**
     * @ElementName domain
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $domain = [
        
    ];

    /**
     * @ElementName admin
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdmin
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdmin[]
     */
    protected $admin = [
        
    ];

    /**
     * @ElementName groupServiceAuthorization
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorization
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorization[]
     */
    protected $groupServiceAuthorization = [
        
    ];

    /**
     * @ElementName userServiceAuthorization
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserServiceAuthorization
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserServiceAuthorization[]
     */
    protected $userServiceAuthorization = [
        
    ];

    /**
     * @ElementName servicePack
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServicePack
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServicePack[]
     */
    protected $servicePack = [
        
    ];

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $phoneNumber = [
        
    ];

    /**
     * @ElementName dnRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNRange
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    protected $dnRange = [
        
    ];

    /**
     * @ElementName routingProfile
     * @Type string
     * @Nillable
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @MinLength 4
     * @MaxLength 12
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $routingProfile = null;

    /**
     * @ElementName meetMeConferencingAllocatedPorts
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null
     */
    protected $meetMeConferencingAllocatedPorts = null;

    /**
     * @ElementName trunkGroupMaxActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    protected $trunkGroupMaxActiveCalls = null;

    /**
     * @ElementName trunkGroupBurstingMaxActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    protected $trunkGroupBurstingMaxActiveCalls = null;

    /**
     * @ElementName voiceMessagingGroupSettings
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupSettingsAdd
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupSettingsAdd|null
     */
    protected $voiceMessagingGroupSettings = null;

    /**
     * @ElementName voiceMessagingGroupVoicePortalScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoicePortalScope
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2726
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoicePortalScope|null
     */
    protected $voiceMessagingGroupVoicePortalScope = null;

    /**
     * Getter for isEnterprise
     *
     * @return bool
     */
    public function getIsEnterprise()
    {
        return $this->isEnterprise instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isEnterprise;
    }

    /**
     * Setter for isEnterprise
     *
     * @param bool $isEnterprise
     * @return $this
     */
    public function setIsEnterprise($isEnterprise)
    {
        $this->isEnterprise = $isEnterprise;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsEnterprise()
    {
        $this->isEnterprise = null;
        return $this;
    }

    /**
     * Getter for useCustomRoutingProfile
     *
     * @return bool
     */
    public function getUseCustomRoutingProfile()
    {
        return $this->useCustomRoutingProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useCustomRoutingProfile;
    }

    /**
     * Setter for useCustomRoutingProfile
     *
     * @param bool $useCustomRoutingProfile
     * @return $this
     */
    public function setUseCustomRoutingProfile($useCustomRoutingProfile)
    {
        $this->useCustomRoutingProfile = $useCustomRoutingProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseCustomRoutingProfile()
    {
        $this->useCustomRoutingProfile = null;
        return $this;
    }

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
     * Getter for serviceProviderName
     *
     * @return string
     */
    public function getServiceProviderName()
    {
        return $this->serviceProviderName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderName;
    }

    /**
     * Setter for serviceProviderName
     *
     * @param string $serviceProviderName
     * @return $this
     */
    public function setServiceProviderName($serviceProviderName)
    {
        $this->serviceProviderName = $serviceProviderName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderName()
    {
        $this->serviceProviderName = null;
        return $this;
    }

    /**
     * Getter for supportEmail
     *
     * @return string
     */
    public function getSupportEmail()
    {
        return $this->supportEmail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportEmail;
    }

    /**
     * Setter for supportEmail
     *
     * @param string $supportEmail
     * @return $this
     */
    public function setSupportEmail($supportEmail)
    {
        $this->supportEmail = $supportEmail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportEmail()
    {
        $this->supportEmail = null;
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
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

    /**
     * Getter for resellerName
     *
     * @return string
     */
    public function getResellerName()
    {
        return $this->resellerName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerName;
    }

    /**
     * Setter for resellerName
     *
     * @param string $resellerName
     * @return $this
     */
    public function setResellerName($resellerName)
    {
        $this->resellerName = $resellerName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerName()
    {
        $this->resellerName = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdmin[]
     */
    public function getAdmin()
    {
        return $this->admin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->admin;
    }

    /**
     * Setter for admin
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdmin[] $admin
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdmin $admin
     * @return $this
     */
    public function addAdmin($admin)
    {
        $this->admin[] = $admin;
        return $this;
    }

    /**
     * Getter for groupServiceAuthorization
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorization[]
     */
    public function getGroupServiceAuthorization()
    {
        return $this->groupServiceAuthorization instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupServiceAuthorization;
    }

    /**
     * Setter for groupServiceAuthorization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorization[] $groupServiceAuthorization
     * @return $this
     */
    public function setGroupServiceAuthorization(array $groupServiceAuthorization)
    {
        $this->groupServiceAuthorization = $groupServiceAuthorization;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupServiceAuthorization()
    {
        $this->groupServiceAuthorization = null;
        return $this;
    }

    /**
     * Adder for groupServiceAuthorization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupServiceAuthorization $groupServiceAuthorization
     * @return $this
     */
    public function addGroupServiceAuthorization($groupServiceAuthorization)
    {
        $this->groupServiceAuthorization[] = $groupServiceAuthorization;
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
     * Getter for servicePack
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServicePack[]
     */
    public function getServicePack()
    {
        return $this->servicePack instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePack;
    }

    /**
     * Setter for servicePack
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServicePack[] $servicePack
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServicePack $servicePack
     * @return $this
     */
    public function addServicePack($servicePack)
    {
        $this->servicePack[] = $servicePack;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @return string[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string[] $phoneNumber
     * @return $this
     */
    public function setPhoneNumber(array $phoneNumber)
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
     * Adder for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function addPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber[] = $phoneNumber;
        return $this;
    }

    /**
     * Getter for dnRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    public function getDnRange()
    {
        return $this->dnRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnRange;
    }

    /**
     * Setter for dnRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange[] $dnRange
     * @return $this
     */
    public function setDnRange(array $dnRange)
    {
        $this->dnRange = $dnRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnRange()
    {
        $this->dnRange = null;
        return $this;
    }

    /**
     * Adder for dnRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange $dnRange
     * @return $this
     */
    public function addDnRange($dnRange)
    {
        $this->dnRange[] = $dnRange;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     */
    public function getTrunkGroupMaxActiveCalls()
    {
        return $this->trunkGroupMaxActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupMaxActiveCalls;
    }

    /**
     * Setter for trunkGroupMaxActiveCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $trunkGroupMaxActiveCalls
     * @return $this
     */
    public function setTrunkGroupMaxActiveCalls(\CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $trunkGroupMaxActiveCalls)
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

    /**
     * Getter for voiceMessagingGroupSettings
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupSettingsAdd
     */
    public function getVoiceMessagingGroupSettings()
    {
        return $this->voiceMessagingGroupSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingGroupSettings;
    }

    /**
     * Setter for voiceMessagingGroupSettings
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupSettingsAdd $voiceMessagingGroupSettings
     * @return $this
     */
    public function setVoiceMessagingGroupSettings(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoiceMessagingGroupSettingsAdd $voiceMessagingGroupSettings)
    {
        $this->voiceMessagingGroupSettings = $voiceMessagingGroupSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessagingGroupSettings()
    {
        $this->voiceMessagingGroupSettings = null;
        return $this;
    }

    /**
     * Getter for voiceMessagingGroupVoicePortalScope
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoicePortalScope
     */
    public function getVoiceMessagingGroupVoicePortalScope()
    {
        return $this->voiceMessagingGroupVoicePortalScope instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingGroupVoicePortalScope;
    }

    /**
     * Setter for voiceMessagingGroupVoicePortalScope
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoicePortalScope $voiceMessagingGroupVoicePortalScope
     * @return $this
     */
    public function setVoiceMessagingGroupVoicePortalScope(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderVoicePortalScope $voiceMessagingGroupVoicePortalScope)
    {
        $this->voiceMessagingGroupVoicePortalScope = $voiceMessagingGroupVoicePortalScope;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessagingGroupVoicePortalScope()
    {
        $this->voiceMessagingGroupVoicePortalScope = null;
        return $this;
    }
}

