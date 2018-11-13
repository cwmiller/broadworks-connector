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
 *
 * @see ServiceProviderGetRequest13mp2
 * @see ServiceProviderGetResponse17sp1
 */
class ServiceProviderGetResponse13mp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isEnterprise
     * @Type bool
     * @var bool|null
     */
    private $isEnterprise = null;

    /**
     * @ElementName useCustomRoutingProfile
     * @Type bool
     * @var bool|null
     */
    private $useCustomRoutingProfile = null;

    /**
     * @ElementName defaultDomain
     * @Type string
     * @var string|null
     */
    private $defaultDomain = null;

    /**
     * @ElementName serviceProviderName
     * @Type string
     * @var string|null
     */
    private $serviceProviderName = null;

    /**
     * @ElementName supportEmail
     * @Type string
     * @var string|null
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


}

