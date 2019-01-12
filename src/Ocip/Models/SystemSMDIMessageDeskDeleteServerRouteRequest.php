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
 * @Groups [{"id":"ee7bb69368e23a56a82c5d9cf07b5433:104","type":"sequence"}]
 */
class SystemSMDIMessageDeskDeleteServerRouteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName routeDestination
     * @Type string
     * @Group ee7bb69368e23a56a82c5d9cf07b5433:104
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

