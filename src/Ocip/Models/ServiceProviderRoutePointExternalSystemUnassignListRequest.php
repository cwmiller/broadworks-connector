<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRoutePointExternalSystemUnassignListRequest
 *
 * Unassign a list of route point external systems from a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderRoutePointExternalSystemUnassignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName routePointExternalSystem
     * @var string[]
     */
    private $routePointExternalSystem = array(
        
    );

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
     * Getter for routePointExternalSystem
     *
     * @ElementName routePointExternalSystem
     * @return string[]
     */
    public function getRoutePointExternalSystem()
    {
        return $this->routePointExternalSystem;
    }

    /**
     * Setter for routePointExternalSystem
     *
     * @ElementName routePointExternalSystem
     * @param string[] $routePointExternalSystem
     * @return $this
     */
    public function setRoutePointExternalSystem($routePointExternalSystem)
    {
        $this->routePointExternalSystem = $routePointExternalSystem;
        return $this;
    }

    /**
     * Adder for routePointExternalSystem
     *
     * @ElementName routePointExternalSystem
     * @param string $routePointExternalSystem
     * @return $this
     */
    public function addRoutePointExternalSystem($routePointExternalSystem)
    {
        $this->routePointExternalSystem []= $routePointExternalSystem;
        return $this;
    }


}

