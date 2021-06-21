<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetResponse22V2
 *
 * Response to the ServiceProviderGetRequest22V2.
 *         The response contains the service provider or enterprise's profile information.
 *         The following elements isare only used in Amplify data mode and not returned
 *         in AS and XS data mode:
 *         servicePolicy,
 *         callProcessingSliceId,
 *         provisioningSliceId,
 *         subscriberPartition,
 *         preferredDataCenter.
 *         
 *         The following elements are only used in Amplify and XS data mode and not
 *         returned in AS data mode:
 *         preferredDataCenter.
 *         
 *         The following data elements are only used in AS data mode and not returned
 *         in XS data mode:
 *         resellerId.     
 *         
 *         Replaced by ServiceProviderGetResponse22V3.
 *
 * @see ServiceProviderGetRequest22V2
 * @see ServiceProviderGetResponse22V3
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:5811","type":"sequence","children":[{"id":"de4d76f01f337fe4694212ec9f771753:5812","type":"choice"}]}]
 */
class ServiceProviderGetResponse22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isEnterprise
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:5812
     * @var bool|null
     */
    private $isEnterprise = null;

    /**
     * @ElementName useCustomRoutingProfile
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:5812
     * @var bool|null
     */
    private $useCustomRoutingProfile = null;

    /**
     * @ElementName defaultDomain
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:5811
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $defaultDomain = null;

    /**
     * @ElementName serviceProviderName
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:5811
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $serviceProviderName = null;

    /**
     * @ElementName supportEmail
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:5811
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $supportEmail = null;

    /**
     * @ElementName contact
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Contact
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:5811
     * @var \CWM\BroadWorksConnector\Ocip\Models\Contact|null
     */
    private $contact = null;

    /**
     * @ElementName address
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StreetAddress
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:5811
     * @var \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    private $address = null;

    /**
     * @ElementName useServiceProviderLanguages
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:5811
     * @var bool|null
     */
    private $useServiceProviderLanguages = null;

    /**
     * @ElementName servicePolicy
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:5811
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $servicePolicy = null;

    /**
     * @ElementName callProcessingSliceId
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:5811
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $callProcessingSliceId = null;

    /**
     * @ElementName provisioningSliceId
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:5811
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $provisioningSliceId = null;

    /**
     * @ElementName subscriberPartition
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:5811
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $subscriberPartition = null;

    /**
     * @ElementName preferredDataCenter
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:5811
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $preferredDataCenter = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:5811
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $resellerId = null;

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


}

