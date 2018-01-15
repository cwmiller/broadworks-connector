<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskGetListRequest
 *
 * Requests a list of all service pack migration task for a service provider.
 *         The response is either
 * ServiceProviderServicePackMigrationTaskGetListResponse
 *         or ErrorResponse.
 *         Replaced By: ServiceProviderServicePackMigrationTaskGetListRequest21
 */
class ServiceProviderServicePackMigrationTaskGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

