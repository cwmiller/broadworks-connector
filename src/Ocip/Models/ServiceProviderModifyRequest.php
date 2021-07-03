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
 *         subscriberPartition.
 *         When the callProcessingSliceId or provisioningSliceId is set to nillable, 
 *         it will be assigned to the default Slice.
 *         Only Provisioning admin and above can change the callProcessingSliceId, 
 *         provisioningSliceId, and subscriberPartition.
 *         
 *         The following element is only used in AS data mode and ignored 
 *         in Amplify and XS data mode: 
 *         resellerId
 *         resellerName
 *         
 *         resellerId and resellerName can only be configured by a Reseller or higher level administrator.
 *
 * 	    The following behavior is only applicable in CloudPBX:
 * 	      - when existing resellerId is specified, enterprise/Service Provider shall be moved to
 * 	        requesting reseller.
 * 	      - when new resellerId, that does not exist in the system, is specified, the new 
 * 	        Reseller is created the given resellerId and resellerName (if provided) and 	enterprise/Service Provider is moved to the newly created Reseller.
 * 	    
 * 	    resellerName element is ignored if the reseller the service provider is being moved to 	already exists.
 *
 *         
 *         The following elements are only used in Amplify and XS data mode and ignored in AS data mode:
 *         preferredDataCenter.
 *         Only Provisioning admin and above can change the preferredDataCenter.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *    		 defaultExtensionLength 
 *    		 locationRoutingPrefixDigit
 *    		 locationCodeLength
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:4893","type":"sequence"}]
 */
class ServiceProviderModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4893
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName defaultDomain
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4893
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $defaultDomain = null;

    /**
     * @ElementName serviceProviderName
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4893
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $serviceProviderName = null;

    /**
     * @ElementName supportEmail
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4893
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $supportEmail = null;

    /**
     * @ElementName contact
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Contact
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4893
     * @var \CWM\BroadWorksConnector\Ocip\Models\Contact|null
     */
    private $contact = null;

    /**
     * @ElementName address
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StreetAddress
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4893
     * @var \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    private $address = null;

    /**
     * @ElementName useServiceProviderLanguages
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4893
     * @var bool|null
     */
    private $useServiceProviderLanguages = null;

    /**
     * @ElementName servicePolicy
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4893
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $servicePolicy = null;

    /**
     * @ElementName callProcessingSliceId
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4893
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callProcessingSliceId = null;

    /**
     * @ElementName provisioningSliceId
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4893
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $provisioningSliceId = null;

    /**
     * @ElementName subscriberPartition
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4893
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $subscriberPartition = null;

    /**
     * @ElementName preferredDataCenter
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4893
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $preferredDataCenter = null;

    /**
     * @ElementName defaultExtensionLength
     * @Type int
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4893
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultExtensionLength = null;

    /**
     * @ElementName locationRoutingPrefixDigit
     * @Type int
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4893
     * @MinInclusive 0
     * @MaxInclusive 9
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $locationRoutingPrefixDigit = null;

    /**
     * @ElementName locationCodeLength
     * @Type int
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4893
     * @MinInclusive 1
     * @MaxInclusive 15
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $locationCodeLength = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4893
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName resellerName
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4893
     * @MinLength 1
     * @MaxLength 320
     * @var string|null
     */
    private $resellerName = null;

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
    public function setServiceProviderName($serviceProviderName = null)
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
    public function setSupportEmail($supportEmail = null)
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
    public function setServicePolicy($servicePolicy = null)
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
    public function setCallProcessingSliceId($callProcessingSliceId = null)
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
    public function setProvisioningSliceId($provisioningSliceId = null)
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
    public function setSubscriberPartition($subscriberPartition = null)
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
    public function setPreferredDataCenter($preferredDataCenter = null)
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

    /**
     * Getter for defaultExtensionLength
     *
     * @return int|null
     */
    public function getDefaultExtensionLength()
    {
        return $this->defaultExtensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultExtensionLength;
    }

    /**
     * Setter for defaultExtensionLength
     *
     * @param int|null $defaultExtensionLength
     * @return $this
     */
    public function setDefaultExtensionLength($defaultExtensionLength = null)
    {
        if ($defaultExtensionLength === null) {
            $this->defaultExtensionLength = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultExtensionLength = $defaultExtensionLength;
        }
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
     * Getter for locationRoutingPrefixDigit
     *
     * @return int|null
     */
    public function getLocationRoutingPrefixDigit()
    {
        return $this->locationRoutingPrefixDigit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locationRoutingPrefixDigit;
    }

    /**
     * Setter for locationRoutingPrefixDigit
     *
     * @param int|null $locationRoutingPrefixDigit
     * @return $this
     */
    public function setLocationRoutingPrefixDigit($locationRoutingPrefixDigit = null)
    {
        if ($locationRoutingPrefixDigit === null) {
            $this->locationRoutingPrefixDigit = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->locationRoutingPrefixDigit = $locationRoutingPrefixDigit;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocationRoutingPrefixDigit()
    {
        $this->locationRoutingPrefixDigit = null;
        return $this;
    }

    /**
     * Getter for locationCodeLength
     *
     * @return int|null
     */
    public function getLocationCodeLength()
    {
        return $this->locationCodeLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locationCodeLength;
    }

    /**
     * Setter for locationCodeLength
     *
     * @param int|null $locationCodeLength
     * @return $this
     */
    public function setLocationCodeLength($locationCodeLength = null)
    {
        if ($locationCodeLength === null) {
            $this->locationCodeLength = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->locationCodeLength = $locationCodeLength;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocationCodeLength()
    {
        $this->locationCodeLength = null;
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


}

