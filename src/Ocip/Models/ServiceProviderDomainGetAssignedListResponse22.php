<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDomainGetAssignedListResponse22
 *
 * Contains a simple list of service provider domain names.
 *
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:4009","type":"sequence"}]
 */
class ServiceProviderDomainGetAssignedListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceProviderDefaultDomain
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4009
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
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4009
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

