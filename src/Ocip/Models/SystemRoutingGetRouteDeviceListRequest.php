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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:15342","type":"sequence"}]
 */
class SystemRoutingGetRouteDeviceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName routeName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15342
     * @MinLength 1
     * @MaxLength 32
     * @var string|null
     */
    private $routeName = null;

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

