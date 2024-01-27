<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderIntegratedIMPGetRequest21sp1
 *
 * Get the Integrated IMP service attributes for the service provider.
 *         The response is either ServiceProviderIntegratedIMPGetResponse21sp1 or ErrorResponse.
 *         
 *         Replaced by: ServiceProviderIntegratedIMPGetRequest22 in AS data mode
 *
 * @see ServiceProviderIntegratedIMPGetResponse21sp1
 * @see ErrorResponse
 * @see ServiceProviderIntegratedIMPGetRequest22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:6949","type":"sequence"}]
 */
class ServiceProviderIntegratedIMPGetRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:6949
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }
}

