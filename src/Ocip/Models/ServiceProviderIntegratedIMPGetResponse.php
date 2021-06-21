<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderIntegratedIMPGetResponse
 *
 * Response to the ServiceProviderIntegratedIMPGetRequest.
 *         The response contains the service provider Integrated IMP service attributes.
 *         Replaced by: ServiceProviderIntegratedIMPGetResponse21 in AS data mode
 *
 * @see ServiceProviderIntegratedIMPGetRequest
 * @see ServiceProviderIntegratedIMPGetResponse21
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:5999","type":"sequence"}]
 */
class ServiceProviderIntegratedIMPGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useSystemServiceDomain
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:5999
     * @var bool|null
     */
    private $useSystemServiceDomain = null;

    /**
     * @ElementName serviceDomain
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:5999
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $serviceDomain = null;

    /**
     * Getter for useSystemServiceDomain
     *
     * @return bool
     */
    public function getUseSystemServiceDomain()
    {
        return $this->useSystemServiceDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemServiceDomain;
    }

    /**
     * Setter for useSystemServiceDomain
     *
     * @param bool $useSystemServiceDomain
     * @return $this
     */
    public function setUseSystemServiceDomain($useSystemServiceDomain)
    {
        $this->useSystemServiceDomain = $useSystemServiceDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemServiceDomain()
    {
        $this->useSystemServiceDomain = null;
        return $this;
    }

    /**
     * Getter for serviceDomain
     *
     * @return string
     */
    public function getServiceDomain()
    {
        return $this->serviceDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceDomain;
    }

    /**
     * Setter for serviceDomain
     *
     * @param string $serviceDomain
     * @return $this
     */
    public function setServiceDomain($serviceDomain)
    {
        $this->serviceDomain = $serviceDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceDomain()
    {
        $this->serviceDomain = null;
        return $this;
    }


}

