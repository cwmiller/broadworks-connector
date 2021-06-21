<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDomainGetAssignedListResponse
 *
 * Contains a simple list of service provider domain names.
 *         
 *         Replaced by ServiceProviderDomainGetAssignedListResponse22
 *
 * @see ServiceProviderDomainGetAssignedListResponse22
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:5690","type":"sequence"}]
 */
class ServiceProviderDomainGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceProviderDefaultDomain
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:5690
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $serviceProviderDefaultDomain = null;

    /**
     * @ElementName domain
     * @Type string
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:5690
     * @MinLength 1
     * @MaxLength 80
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

