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
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:13314","type":"sequence"}]
 */
class SystemRoutePointExternalSystemGetRoutePointListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName routePointExternalSystem
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:13314
     * @var string|null
     */
    private $routePointExternalSystem = null;

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

