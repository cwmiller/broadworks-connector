<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingAddRouteRequest
 *
 * Request to add a route to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemRoutingAddRouteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

