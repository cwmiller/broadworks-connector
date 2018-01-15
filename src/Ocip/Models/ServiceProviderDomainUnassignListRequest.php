<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDomainUnassignListRequest
 *
 * Unassign a list of domains from a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderDomainUnassignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName domain
     * @var string[]
     */
    private $domain = array(
        
    );

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

