<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetRequest13mp2
 *
 * Get the profile for a service provider or enterprise.
 *         The response is either a ServiceProviderGetResponse13mp2 or an
 * ErrorResponse.
 *         
 *         Replaced by: ServiceProviderGetRequest17sp1
 */
class ServiceProviderGetRequest13mp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

