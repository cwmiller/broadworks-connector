<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingDeleteRouteRequest
 *
 * Request to delete a route from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoutingDeleteRouteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

