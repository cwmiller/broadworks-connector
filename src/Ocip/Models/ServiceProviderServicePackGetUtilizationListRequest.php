<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackGetUtilizationListRequest
 *
 * Request to get the service pack utilization for a service provider.
 *         For each service pack, a table of groups utilizing the pack is returned.
 *         The response is either
 * ServiceProviderServicePackGetUtilizationListResponse or ErrorResponse.
 *
 * @see ServiceProviderServicePackGetUtilizationListResponse
 * @see ErrorResponse
 */
class ServiceProviderServicePackGetUtilizationListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

