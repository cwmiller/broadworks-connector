<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderIntegratedIMPGetResponse
 *
 * Response to the ServiceProviderIntegratedIMPGetRequest.
 *         The response contains the service provider Integrated IMP service
 * attributes.
 *         Replaced by: ServiceProviderIntegratedIMPGetResponse21 in AS data mode
 *
 * @see ServiceProviderIntegratedIMPGetRequest
 * @see ServiceProviderIntegratedIMPGetResponse21
 */
class ServiceProviderIntegratedIMPGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useSystemServiceDomain
     * @var bool|null
     */
    private $useSystemServiceDomain = null;

    /**
     * @ElementName serviceDomain
     * @var string|null
     */
    private $serviceDomain = null;

    /**
     * Getter for useSystemServiceDomain
     *
     * @ElementName useSystemServiceDomain
     * @return bool|null
     */
    public function getUseSystemServiceDomain()
    {
        return $this->useSystemServiceDomain;
    }

    /**
     * Setter for useSystemServiceDomain
     *
     * @ElementName useSystemServiceDomain
     * @param bool|null $useSystemServiceDomain
     * @return $this
     */
    public function setUseSystemServiceDomain($useSystemServiceDomain)
    {
        $this->useSystemServiceDomain = $useSystemServiceDomain;
        return $this;
    }

    /**
     * Getter for serviceDomain
     *
     * @ElementName serviceDomain
     * @return string|null
     */
    public function getServiceDomain()
    {
        return $this->serviceDomain;
    }

    /**
     * Setter for serviceDomain
     *
     * @ElementName serviceDomain
     * @param string|null $serviceDomain
     * @return $this
     */
    public function setServiceDomain($serviceDomain)
    {
        $this->serviceDomain = $serviceDomain;
        return $this;
    }


}

