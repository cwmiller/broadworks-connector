<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetResponse13mp2
 *
 * Response to the ServiceProviderGetRequest13mp2.
 *         The response contains the service provider or enterprise's profile
 * information.
 *         
 *         Replaced by: ServiceProviderGetResponse17sp1
 */
class ServiceProviderGetResponse13mp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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


}

