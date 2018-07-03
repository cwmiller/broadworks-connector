<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderTrunkGroupGetRequest14sp1
 *
 * Get the maximum and bursting maximum permissible active Trunk Group calls for
 * the service provider.
 *         The response is either a ServiceProviderTrunkGroupGetResponse14sp1 or an
 * ErrorResponse.
 *
 * @see ServiceProviderTrunkGroupGetResponse14sp1
 * @see ErrorResponse
 */
class ServiceProviderTrunkGroupGetRequest14sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

