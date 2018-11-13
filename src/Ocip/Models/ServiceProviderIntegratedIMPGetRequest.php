<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderIntegratedIMPGetRequest
 *
 * Get the Integrated IMP service attributes for the service provider.
 *         The response is either ServiceProviderIntegratedIMPGetResponse or
 * ErrorResponse.
 *         Replaced by: ServiceProviderIntegratedIMPGetRequest21 in AS data mode
 *
 * @see ServiceProviderIntegratedIMPGetResponse
 * @see ErrorResponse
 * @see ServiceProviderIntegratedIMPGetRequest21
 */
class ServiceProviderIntegratedIMPGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

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

