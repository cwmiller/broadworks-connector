<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMDIMessageDeskModifyServerRouteRequest
 *
 * Replace the list of devices associated with a SMDI server route destination.
 *         There must be at least one device in the list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSMDIMessageDeskModifyServerRouteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName routeDestination
     * @var string|null
     */
    private $routeDestination = null;

    /**
     * @ElementName deviceNameList
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRouteRequest\DeviceNameList|null
     */
    private $deviceNameList = null;

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
     * Getter for deviceNameList
     *
     * @ElementName deviceNameList
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRouteRequest\DeviceNameList|null
     */
    public function getDeviceNameList()
    {
        return $this->deviceNameList;
    }

    /**
     * Setter for deviceNameList
     *
     * @ElementName deviceNameList
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRouteRequest\DeviceNameList|null $deviceNameList
     * @return $this
     */
    public function setDeviceNameList($deviceNameList)
    {
        $this->deviceNameList = $deviceNameList;
        return $this;
    }


}

