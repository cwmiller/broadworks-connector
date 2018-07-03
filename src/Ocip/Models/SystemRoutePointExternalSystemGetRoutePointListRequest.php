<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutePointExternalSystemGetRoutePointListRequest
 *
 * Get a list of Route Points that are using the specified Route Point External
 * System.
 *       The response is either a
 * SystemRoutePointExternalSystemGetRoutePointListResponse or an
 *       ErrorResponse.
 *
 * @see SystemRoutePointExternalSystemGetRoutePointListResponse
 * @see ErrorResponse
 */
class SystemRoutePointExternalSystemGetRoutePointListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName routePointExternalSystem
     * @var string|null
     */
    private $routePointExternalSystem = null;

    /**
     * Getter for routePointExternalSystem
     *
     * @ElementName routePointExternalSystem
     * @return string|null
     */
    public function getRoutePointExternalSystem()
    {
        return $this->routePointExternalSystem;
    }

    /**
     * Setter for routePointExternalSystem
     *
     * @ElementName routePointExternalSystem
     * @param string|null $routePointExternalSystem
     * @return $this
     */
    public function setRoutePointExternalSystem($routePointExternalSystem)
    {
        $this->routePointExternalSystem = $routePointExternalSystem;
        return $this;
    }


}

