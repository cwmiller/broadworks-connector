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
     * @Type string
     * @var string|null
     */
    private $serviceProviderDefaultDomain = null;

    /**
     * @ElementName domain
     * @Type string
     * @Array
     * @var string[]
     */
    private $domain = array(
        
    );

    /**
     * Getter for serviceProviderDefaultDomain
     *
     * @return string
     */
    public function getServiceProviderDefaultDomain()
    {
        return $this->serviceProviderDefaultDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderDefaultDomain;
    }

    /**
     * Setter for serviceProviderDefaultDomain
     *
     * @param string $serviceProviderDefaultDomain
     * @return $this
     */
    public function setServiceProviderDefaultDomain($serviceProviderDefaultDomain)
    {
        $this->serviceProviderDefaultDomain = $serviceProviderDefaultDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderDefaultDomain()
    {
        $this->serviceProviderDefaultDomain = null;
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


}

