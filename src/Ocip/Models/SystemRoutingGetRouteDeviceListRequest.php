<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingGetRouteDeviceListRequest
 *
 * Request to get a list of devices for a route.
 *         The response is either a SystemRoutingGetRouteDeviceListResponse or an ErrorResponse.
 *
 * @see SystemRoutingGetRouteDeviceListResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:15558","type":"sequence"}]
 */
class SystemRoutingGetRouteDeviceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName routeName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:15558
     * @MinLength 1
     * @MaxLength 32
     * @var string|null
     */
    protected $routeName = null;

    /**
     * Getter for routeName
     *
     * @return string
     */
    public function getRouteName()
    {
        return $this->routeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeName;
    }

    /**
     * Setter for routeName
     *
     * @param string $routeName
     * @return $this
     */
    public function setRouteName($routeName)
    {
        $this->routeName = $routeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteName()
    {
        $this->routeName = null;
        return $this;
    }
}

