<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderIntegratedIMPGetRequest21
 *
 * Get the Integrated IMP service attributes for the service provider.
 *         The response is either ServiceProviderIntegratedIMPGetResponse21 or
 * ErrorResponse.
 */
class ServiceProviderIntegratedIMPGetRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

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


}

