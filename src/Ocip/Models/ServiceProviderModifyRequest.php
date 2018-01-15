<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderModifyRequest
 *
 * Modify the profile for a service provider or enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
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
     * @ElementName useServiceProviderLanguages
     * @var bool|null
     */
    private $useServiceProviderLanguages = null;

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


}

