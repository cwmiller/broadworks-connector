<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainGetAssignedServiceProviderListRequest
 *
 * Request a list of service providers that have a given domain assigned.
 *         The response is either
 * SystemDomainGetAssignedServiceProviderListResponse or ErrorResponse.
 */
class SystemDomainGetAssignedServiceProviderListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName domain
     * @var string|null
     */
    private $domain = null;

    /**
     * Getter for domain
     *
     * @ElementName domain
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Setter for domain
     *
     * @ElementName domain
     * @param string|null $domain
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }


}

