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
     * @Type string
     * @var string|null
     */
    private $routeDestination = null;

    /**
     * Getter for routeDestination
     *
     * @return string
     */
    public function getRouteDestination()
    {
        return $this->routeDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeDestination;
    }

    /**
     * Setter for routeDestination
     *
     * @param string $routeDestination
     * @return $this
     */
    public function setRouteDestination($routeDestination)
    {
        $this->routeDestination = $routeDestination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteDestination()
    {
        $this->routeDestination = null;
        return $this;
    }


}

