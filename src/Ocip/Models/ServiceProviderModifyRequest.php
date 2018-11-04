<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderModifyRequest
 *
 * Modify the profile for a service provider or enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The following elements are only used in Amplify data mode and ignored 
 *         in AS and XS data mode: 
 *         servicePolicy,
 *         callProcessingSliceId, 
 *         provisioningSliceId, 
 *         subscriberPartition,
 *         preferredDataCenter.
 *         When the callProcessingSliceId or provisioningSliceId is set to
 * nillable, 
 *         it will be assigned to the default Slice.
 *         Only Provisioning admin and above can change the callProcessingSliceId, 
 *         provisioningSliceId, subscriberPartition and preferredDataCenter.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serviceProviderName = null;

    /**
     * @ElementName supportEmail
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @ElementName useServiceProviderLanguages
     * @var bool|null
     */
    private $useServiceProviderLanguages = null;

    /**
     * @ElementName servicePolicy
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $servicePolicy = null;

    /**
     * @ElementName callProcessingSliceId
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callProcessingSliceId = null;

    /**
     * @ElementName provisioningSliceId
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $provisioningSliceId = null;

    /**
     * @ElementName subscriberPartition
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $subscriberPartition = null;

    /**
     * @ElementName preferredDataCenter
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $preferredDataCenter = null;

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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getServiceProviderName()
    {
        return $this->serviceProviderName;
    }

    /**
     * Setter for serviceProviderName
     *
     * @ElementName serviceProviderName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $serviceProviderName
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSupportEmail()
    {
        return $this->supportEmail;
    }

    /**
     * Setter for supportEmail
     *
     * @ElementName supportEmail
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $supportEmail
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
    public function setContact($contact)
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
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Getter for useServiceProviderLanguages
     *
     * @ElementName useServiceProviderLanguages
     * @return bool|null
     */
    public function getUseServiceProviderLanguages()
    {
        return $this->useServiceProviderLanguages;
    }

    /**
     * Setter for useServiceProviderLanguages
     *
     * @ElementName useServiceProviderLanguages
     * @param bool|null $useServiceProviderLanguages
     * @return $this
     */
    public function setUseServiceProviderLanguages($useServiceProviderLanguages)
    {
        $this->useServiceProviderLanguages = $useServiceProviderLanguages;
        return $this;
    }

    /**
     * Getter for servicePolicy
     *
     * @ElementName servicePolicy
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getServicePolicy()
    {
        return $this->servicePolicy;
    }

    /**
     * Setter for servicePolicy
     *
     * @ElementName servicePolicy
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $servicePolicy
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCallProcessingSliceId()
    {
        return $this->callProcessingSliceId;
    }

    /**
     * Setter for callProcessingSliceId
     *
     * @ElementName callProcessingSliceId
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $callProcessingSliceId
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getProvisioningSliceId()
    {
        return $this->provisioningSliceId;
    }

    /**
     * Setter for provisioningSliceId
     *
     * @ElementName provisioningSliceId
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $provisioningSliceId
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSubscriberPartition()
    {
        return $this->subscriberPartition;
    }

    /**
     * Setter for subscriberPartition
     *
     * @ElementName subscriberPartition
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $subscriberPartition
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPreferredDataCenter()
    {
        return $this->preferredDataCenter;
    }

    /**
     * Setter for preferredDataCenter
     *
     * @ElementName preferredDataCenter
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $preferredDataCenter
     * @return $this
     */
    public function setPreferredDataCenter($preferredDataCenter)
    {
        $this->preferredDataCenter = $preferredDataCenter;
        return $this;
    }


}

