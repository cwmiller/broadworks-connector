<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutePointExternalSystemGetRoutePointListRequest
 *
 * Get a list of Route Points that are using the specified Route Point External System.
 *       The response is either a SystemRoutePointExternalSystemGetRoutePointListResponse or an
 *       ErrorResponse.
 *
 * @see SystemRoutePointExternalSystemGetRoutePointListResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:15372","type":"sequence"}]
 */
class SystemRoutePointExternalSystemGetRoutePointListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName routePointExternalSystem
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:15372
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $routePointExternalSystem = null;

    /**
     * Getter for routePointExternalSystem
     *
     * @return string
     */
    public function getRoutePointExternalSystem()
    {
        return $this->routePointExternalSystem instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routePointExternalSystem;
    }

    /**
     * Setter for routePointExternalSystem
     *
     * @param string $routePointExternalSystem
     * @return $this
     */
    public function setRoutePointExternalSystem($routePointExternalSystem)
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
}

