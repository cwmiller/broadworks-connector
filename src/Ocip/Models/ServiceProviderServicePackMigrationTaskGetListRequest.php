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
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:7261","type":"sequence"}]
 */
class ServiceProviderServicePackMigrationTaskGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:7261
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

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

