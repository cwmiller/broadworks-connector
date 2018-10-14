<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAddRequest13mp2
 *
 * Add a service provider or enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The following elements are only used in Amplify data mode and ignored in
 * AS and XS data mode:
 *         servicePolicy,
 *         callProcessingSliceId,
 *         provisioningSliceId,
 *         subscriberPartition,
 *         preferredDataCenter.
 *         When the callProcessingSliceId or provisioningSliceId is not specified
 * in the AmplifyDataMode, 
 *         the default slice Id is assigned to the service provider.
 *         Only Provisioning admin and above can change the callProcessingSliceId, 
 * provisioningSliceId 
 *         ,subscriberPartition and preferredDataCenter.
 *         If reseller administrator sends the request, resellerId is ignored. The
 * reseller administrator's reseller id is used.
 *         
 *         The following data elements are only used in AS data mode:
 *           resellerId
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderAddRequest13mp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName isEnterprise
     * @var bool|null
     */
    private $isEnterprise = null;

    /**
     * @ElementName useCustomRoutingProfile
     * @var bool|null
     */
    private $useCustomRoutingProfile = null;

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName defaultDomain
     * @var string|null
     */
    private $defaultDomain = null;

    /**
     * @ElementName serviceProviderName
     * @var string|null
     */
    private $serviceProviderName = null;

    /**
     * @ElementName supportEmail
     * @var string|null
     */
    private $supportEmail = null;

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
     * @ElementName servicePolicy
     * @var string|null
     */
    private $servicePolicy = null;

    /**
     * @ElementName callProcessingSliceId
     * @var string|null
     */
    private $callProcessingSliceId = null;

    /**
     * @ElementName provisioningSliceId
     * @var string|null
     */
    private $provisioningSliceId = null;

    /**
     * @ElementName subscriberPartition
     * @var string|null
     */
    private $subscriberPartition = null;

    /**
     * @ElementName preferredDataCenter
     * @var string|null
     */
    private $preferredDataCenter = null;

    /**
     * @ElementName resellerId
     * @var string|null
     */
    private $resellerId = null;

    /**
     * Getter for isEnterprise
     *
     * @ElementName isEnterprise
     * @return bool|null
     */
    public function getIsEnterprise()
    {
        return $this->isEnterprise;
    }

    /**
     * Setter for isEnterprise
     *
     * @ElementName isEnterprise
     * @param bool|null $isEnterprise
     * @return $this
     */
    public function setIsEnterprise($isEnterprise)
    {
        $this->isEnterprise = $isEnterprise;
        return $this;
    }

    /**
     * Getter for useCustomRoutingProfile
     *
     * @ElementName useCustomRoutingProfile
     * @return bool|null
     */
    public function getUseCustomRoutingProfile()
    {
        return $this->useCustomRoutingProfile;
    }

    /**
     * Setter for useCustomRoutingProfile
     *
     * @ElementName useCustomRoutingProfile
     * @param bool|null $useCustomRoutingProfile
     * @return $this
     */
    public function setUseCustomRoutingProfile($useCustomRoutingProfile)
    {
        $this->useCustomRoutingProfile = $useCustomRoutingProfile;
        return $this;
    }

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

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
     * Getter for serviceProviderName
     *
     * @ElementName serviceProviderName
     * @return string|null
     */
    public function getServiceProviderName()
    {
        return $this->serviceProviderName;
    }

    /**
     * Setter for serviceProviderName
     *
     * @ElementName serviceProviderName
     * @param string|null $serviceProviderName
     * @return $this
     */
    public function setServiceProviderName($serviceProviderName)
    {
        $this->serviceProviderName = $serviceProviderName;
        return $this;
    }

    /**
     * Getter for supportEmail
     *
     * @ElementName supportEmail
     * @return string|null
     */
    public function getSupportEmail()
    {
        return $this->supportEmail;
    }

    /**
     * Setter for supportEmail
     *
     * @ElementName supportEmail
     * @param string|null $supportEmail
     * @return $this
     */
    public function setSupportEmail($supportEmail)
    {
        $this->supportEmail = $supportEmail;
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
    public function setContact(\CWM\BroadWorksConnector\Ocip\Models\Contact $contact)
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
    public function setAddress(\CWM\BroadWorksConnector\Ocip\Models\StreetAddress $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Getter for servicePolicy
     *
     * @ElementName servicePolicy
     * @return string|null
     */
    public function getServicePolicy()
    {
        return $this->servicePolicy;
    }

    /**
     * Setter for servicePolicy
     *
     * @ElementName servicePolicy
     * @param string|null $servicePolicy
     * @return $this
     */
    public function setServicePolicy($servicePolicy)
    {
        $this->servicePolicy = $servicePolicy;
        return $this;
    }

    /**
     * Getter for callProcessingSliceId
     *
     * @ElementName callProcessingSliceId
     * @return string|null
     */
    public function getCallProcessingSliceId()
    {
        return $this->callProcessingSliceId;
    }

    /**
     * Setter for callProcessingSliceId
     *
     * @ElementName callProcessingSliceId
     * @param string|null $callProcessingSliceId
     * @return $this
     */
    public function setCallProcessingSliceId($callProcessingSliceId)
    {
        $this->callProcessingSliceId = $callProcessingSliceId;
        return $this;
    }

    /**
     * Getter for provisioningSliceId
     *
     * @ElementName provisioningSliceId
     * @return string|null
     */
    public function getProvisioningSliceId()
    {
        return $this->provisioningSliceId;
    }

    /**
     * Setter for provisioningSliceId
     *
     * @ElementName provisioningSliceId
     * @param string|null $provisioningSliceId
     * @return $this
     */
    public function setProvisioningSliceId($provisioningSliceId)
    {
        $this->provisioningSliceId = $provisioningSliceId;
        return $this;
    }

    /**
     * Getter for subscriberPartition
     *
     * @ElementName subscriberPartition
     * @return string|null
     */
    public function getSubscriberPartition()
    {
        return $this->subscriberPartition;
    }

    /**
     * Setter for subscriberPartition
     *
     * @ElementName subscriberPartition
     * @param string|null $subscriberPartition
     * @return $this
     */
    public function setSubscriberPartition($subscriberPartition)
    {
        $this->subscriberPartition = $subscriberPartition;
        return $this;
    }

    /**
     * Getter for preferredDataCenter
     *
     * @ElementName preferredDataCenter
     * @return string|null
     */
    public function getPreferredDataCenter()
    {
        return $this->preferredDataCenter;
    }

    /**
     * Setter for preferredDataCenter
     *
     * @ElementName preferredDataCenter
     * @param string|null $preferredDataCenter
     * @return $this
     */
    public function setPreferredDataCenter($preferredDataCenter)
    {
        $this->preferredDataCenter = $preferredDataCenter;
        return $this;
    }

    /**
     * Getter for resellerId
     *
     * @ElementName resellerId
     * @return string|null
     */
    public function getResellerId()
    {
        return $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @ElementName resellerId
     * @param string|null $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }


}

