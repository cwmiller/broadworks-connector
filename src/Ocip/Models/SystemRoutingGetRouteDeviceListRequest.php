<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingGetRouteDeviceListRequest
 *
 * Request to get a list of devices for a route.
 *         The response is either a SystemRoutingGetRouteDeviceListResponse or an
 * ErrorResponse.
 *
 * @see SystemRoutingGetRouteDeviceListResponse
 * @see ErrorResponse
 */
class SystemRoutingGetRouteDeviceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName routeName
     * @var string|null
     */
    private $routeName = null;

    /**
     * Getter for routeName
     *
     * @ElementName routeName
     * @return string|null
     */
    public function getRouteName()
    {
        return $this->routeName;
    }

    /**
     * Setter for routeName
     *
     * @ElementName routeName
     * @param string|null $routeName
     * @return $this
     */
    public function setRouteName($routeName)
    {
        $this->routeName = $routeName;
        return $this;
    }


}

