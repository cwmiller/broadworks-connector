<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMDIMessageDeskAddServerRouteRequest
 *
 * Request to add a SMDI Server route to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSMDIMessageDeskAddServerRouteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName routeDestination
     * @var string|null
     */
    private $routeDestination = null;

    /**
     * @ElementName deviceName
     * @var string[]
     */
    private $deviceName = array(
        
    );

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

    /**
     * Getter for deviceName
     *
     * @ElementName deviceName
     * @return string[]
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @ElementName deviceName
     * @param string[] $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * Adder for deviceName
     *
     * @ElementName deviceName
     * @param string $deviceName
     * @return $this
     */
    public function addDeviceName($deviceName)
    {
        $this->deviceName []= $deviceName;
        return $this;
    }


}

