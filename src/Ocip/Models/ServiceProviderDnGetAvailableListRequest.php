<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDnGetAvailableListRequest
 *
 * Request a list of available DNs not yet assigned to any group.
 *         Dns assigned to the IMRN pool are not listed in the response.
 *         The response is either ServiceProviderDnGetAvailableListResponse or
 * ErrorResponse.
 */
class ServiceProviderDnGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

