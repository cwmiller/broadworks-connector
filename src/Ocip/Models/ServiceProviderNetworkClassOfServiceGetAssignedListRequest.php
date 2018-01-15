<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderNetworkClassOfServiceGetAssignedListRequest
 *
 * Get a list of Network Classes of Service assigned to a service provider.
 *         The response is either a
 * ServiceProviderNetworkClassOfServiceGetAssignedListResponse 
 *         or an ErorResponse.
 */
class ServiceProviderNetworkClassOfServiceGetAssignedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

