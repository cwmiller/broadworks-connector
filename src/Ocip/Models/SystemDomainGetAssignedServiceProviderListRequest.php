<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainGetAssignedServiceProviderListRequest
 *
 * Request a list of service providers that have a given domain assigned.
 *         If resellerId is specified, only the service providers within the
 * reseller should be returned.
 *         If reseller administrator sends the request and resellerId is not
 * specified, the administrator's resellerId is used.
 *         
 *         The response is either
 * SystemDomainGetAssignedServiceProviderListResponse or ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *           resellerId
 *
 * @see SystemDomainGetAssignedServiceProviderListResponse
 * @see ErrorResponse
 */
class SystemDomainGetAssignedServiceProviderListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName domain
     * @Type string
     * @var string|null
     */
    private $domain = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @var string|null
     */
    private $resellerId = null;

    /**
     * Getter for domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->domain;
    }

    /**
     * Setter for domain
     *
     * @param string $domain
     * @return $this
     */
    public function setDomain($domain)
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


}

