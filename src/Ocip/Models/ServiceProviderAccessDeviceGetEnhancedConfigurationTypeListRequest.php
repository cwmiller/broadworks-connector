<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceGetEnhancedConfigurationTypeListRequest
 *
 * Requests the list of configurable device types of devices that have already been
 *         added to the service provider.
 *         The response is either
 * ServiceProviderAccessDeviceGetEnhancedConfigurationTypeListResponse
 *         or ErrorResponse.
 *
 * @see ServiceProviderAccessDeviceGetEnhancedConfigurationTypeListResponse
 * @see ErrorResponse
 */
class ServiceProviderAccessDeviceGetEnhancedConfigurationTypeListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

