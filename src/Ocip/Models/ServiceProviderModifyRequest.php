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
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName defaultDomain
     * @Type string
     * @var string|null
     */
    private $defaultDomain = null;

    /**
     * @ElementName serviceProviderName
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serviceProviderName = null;

    /**
     * @ElementName supportEmail
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $supportEmail = null;

    /**
     * @ElementName contact
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Contact
     * @var \CWM\BroadWorksConnector\Ocip\Models\Contact|null
     */
    private $contact = null;

    /**
     * @ElementName address
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StreetAddress
     * @var \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    private $address = null;

    /**
     * @ElementName useServiceProviderLanguages
     * @Type bool
     * @var bool|null
     */
    private $useServiceProviderLanguages = null;

    /**
     * @ElementName servicePolicy
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $servicePolicy = null;

    /**
     * @ElementName callProcessingSliceId
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callProcessingSliceId = null;

    /**
     * @ElementName provisioningSliceId
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $provisioningSliceId = null;

    /**
     * @ElementName subscriberPartition
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $subscriberPartition = null;

    /**
     * @ElementName preferredDataCenter
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $preferredDataCenter = null;

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
     * @return string|null
     */
    public function getServiceProviderName()
    {
        return $this->serviceProviderName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderName;
    }

    /**
     * Setter for serviceProviderName
     *
     * @param string|null $serviceProviderName
     * @return $this
     */
    public function setServiceProviderName($serviceProviderName)
    {
        if ($serviceProviderName === null) {
            $this->serviceProviderName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->serviceProviderName = $serviceProviderName;
        }
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
     * @return string|null
     */
    public function getSupportEmail()
    {
        return $this->supportEmail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportEmail;
    }

    /**
     * Setter for supportEmail
     *
     * @param string|null $supportEmail
     * @return $this
     */
    public function setSupportEmail($supportEmail)
    {
        if ($supportEmail === null) {
            $this->supportEmail = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->supportEmail = $supportEmail;
        }
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
     * Getter for useServiceProviderLanguages
     *
     * @return bool
     */
    public function getUseServiceProviderLanguages()
    {
        return $this->useServiceProviderLanguages instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useServiceProviderLanguages;
    }

    /**
     * Setter for useServiceProviderLanguages
     *
     * @param bool $useServiceProviderLanguages
     * @return $this
     */
    public function setUseServiceProviderLanguages($useServiceProviderLanguages)
    {
        $this->useServiceProviderLanguages = $useServiceProviderLanguages;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseServiceProviderLanguages()
    {
        $this->useServiceProviderLanguages = null;
        return $this;
    }

    /**
     * Getter for servicePolicy
     *
     * @return string|null
     */
    public function getServicePolicy()
    {
        return $this->servicePolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePolicy;
    }

    /**
     * Setter for servicePolicy
     *
     * @param string|null $servicePolicy
     * @return $this
     */
    public function setServicePolicy($servicePolicy)
    {
        if ($servicePolicy === null) {
            $this->servicePolicy = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->servicePolicy = $servicePolicy;
        }
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
     * @return string|null
     */
    public function getCallProcessingSliceId()
    {
        return $this->callProcessingSliceId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callProcessingSliceId;
    }

    /**
     * Setter for callProcessingSliceId
     *
     * @param string|null $callProcessingSliceId
     * @return $this
     */
    public function setCallProcessingSliceId($callProcessingSliceId)
    {
        if ($callProcessingSliceId === null) {
            $this->callProcessingSliceId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callProcessingSliceId = $callProcessingSliceId;
        }
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
     * @return string|null
     */
    public function getProvisioningSliceId()
    {
        return $this->provisioningSliceId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->provisioningSliceId;
    }

    /**
     * Setter for provisioningSliceId
     *
     * @param string|null $provisioningSliceId
     * @return $this
     */
    public function setProvisioningSliceId($provisioningSliceId)
    {
        if ($provisioningSliceId === null) {
            $this->provisioningSliceId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->provisioningSliceId = $provisioningSliceId;
        }
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
     * @return string|null
     */
    public function getSubscriberPartition()
    {
        return $this->subscriberPartition instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->subscriberPartition;
    }

    /**
     * Setter for subscriberPartition
     *
     * @param string|null $subscriberPartition
     * @return $this
     */
    public function setSubscriberPartition($subscriberPartition)
    {
        if ($subscriberPartition === null) {
            $this->subscriberPartition = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->subscriberPartition = $subscriberPartition;
        }
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
     * @return string|null
     */
    public function getPreferredDataCenter()
    {
        return $this->preferredDataCenter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->preferredDataCenter;
    }

    /**
     * Setter for preferredDataCenter
     *
     * @param string|null $preferredDataCenter
     * @return $this
     */
    public function setPreferredDataCenter($preferredDataCenter)
    {
        if ($preferredDataCenter === null) {
            $this->preferredDataCenter = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->preferredDataCenter = $preferredDataCenter;
        }
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


}

