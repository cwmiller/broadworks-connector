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
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:5646","type":"sequence"}]
 */
class ServiceProviderRoutePointExternalSystemUnassignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:5646
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName routePointExternalSystem
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:5646
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $routePointExternalSystem = [
        
    ];

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

    /**
     * Getter for routePointExternalSystem
     *
     * @return string[]
     */
    public function getRoutePointExternalSystem()
    {
        return $this->routePointExternalSystem instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routePointExternalSystem;
    }

    /**
     * Setter for routePointExternalSystem
     *
     * @param string[] $routePointExternalSystem
     * @return $this
     */
    public function setRoutePointExternalSystem(array $routePointExternalSystem)
    {
        $this->routePointExternalSystem = $routePointExternalSystem;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoutePointExternalSystem()
    {
        $this->routePointExternalSystem = null;
        return $this;
    }

    /**
     * Adder for routePointExternalSystem
     *
     * @param string $routePointExternalSystem
     * @return $this
     */
    public function addRoutePointExternalSystem(string $routePointExternalSystem)
    {
        $this->routePointExternalSystem[] = $routePointExternalSystem;
        return $this;
    }
}

