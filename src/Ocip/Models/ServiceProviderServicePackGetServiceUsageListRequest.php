<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackGetServiceUsageListRequest
 *
 * Request to get the list of service packs containing a specified service.
 *         The response is either
 * ServiceProviderServicePackGetServiceUsageListResponse or ErrorResponse.
 */
class ServiceProviderServicePackGetServiceUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName serviceName
     * @var string|null
     */
    private $serviceName = null;

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

    /**
     * Getter for serviceName
     *
     * @ElementName serviceName
     * @return string|null
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @ElementName serviceName
     * @param string|null $serviceName
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }


}

