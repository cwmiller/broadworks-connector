<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDomainGetAssignedListResponse
 *
 * Contains a simple list of all service provider domain names.
 */
class ServiceProviderDomainGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceProviderDefaultDomain
     * @var string|null
     */
    private $serviceProviderDefaultDomain = null;

    /**
     * @ElementName domain
     * @var string[]
     */
    private $domain = array(
        
    );

    /**
     * Getter for serviceProviderDefaultDomain
     *
     * @ElementName serviceProviderDefaultDomain
     * @return string|null
     */
    public function getServiceProviderDefaultDomain()
    {
        return $this->serviceProviderDefaultDomain;
    }

    /**
     * Setter for serviceProviderDefaultDomain
     *
     * @ElementName serviceProviderDefaultDomain
     * @param string|null $serviceProviderDefaultDomain
     * @return $this
     */
    public function setServiceProviderDefaultDomain($serviceProviderDefaultDomain)
    {
        $this->serviceProviderDefaultDomain = $serviceProviderDefaultDomain;
        return $this;
    }

    /**
     * Getter for domain
     *
     * @ElementName domain
     * @return string[]
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Setter for domain
     *
     * @ElementName domain
     * @param string[] $domain
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * Adder for domain
     *
     * @ElementName domain
     * @param string $domain
     * @return $this
     */
    public function addDomain($domain)
    {
        $this->domain []= $domain;
        return $this;
    }


}

