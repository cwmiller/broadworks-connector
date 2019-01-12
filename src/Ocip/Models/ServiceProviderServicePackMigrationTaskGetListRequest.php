<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskGetListRequest
 *
 * Requests a list of all service pack migration task for a service provider.
 *         The response is either ServiceProviderServicePackMigrationTaskGetListResponse
 *         or ErrorResponse.
 *         
 *         Replaced By: ServiceProviderServicePackMigrationTaskGetListRequest21 in AS data mode
 *
 * @see ServiceProviderServicePackMigrationTaskGetListResponse
 * @see ErrorResponse
 * @see ServiceProviderServicePackMigrationTaskGetListRequest21
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:2834","type":"sequence"}]
 */
class ServiceProviderServicePackMigrationTaskGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:2834
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

