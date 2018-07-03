<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMDIMessageDeskDeleteServerRouteRequest
 *
 * Request to delete a SMDI Server route from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSMDIMessageDeskDeleteServerRouteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName routeDestination
     * @var string|null
     */
    private $routeDestination = null;

    /**
     * Getter for routeDestination
     *
     * @ElementName routeDestination
     * @return string|null
     */
    public function getRouteDestination()
    {
        return $this->routeDestination;
    }

    /**
     * Setter for routeDestination
     *
     * @ElementName routeDestination
     * @param string|null $routeDestination
     * @return $this
     */
    public function setRouteDestination($routeDestination)
    {
        $this->routeDestination = $routeDestination;
        return $this;
    }


}

