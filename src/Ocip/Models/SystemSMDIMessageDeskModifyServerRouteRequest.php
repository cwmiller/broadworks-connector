<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMDIMessageDeskModifyServerRouteRequest
 *
 * Replace the list of devices associated with a SMDI server route destination.
 *         There must be at least one device in the list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
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
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRouteRequestDeviceNameList|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRouteRequestDeviceNameList|null
     */
    public function getDeviceNameList()
    {
        return $this->deviceNameList;
    }

    /**
     * Setter for deviceNameList
     *
     * @ElementName deviceNameList
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRouteRequestDeviceNameList|null $deviceNameList
     * @return $this
     */
    public function setDeviceNameList(\CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRouteRequestDeviceNameList $deviceNameList)
    {
        $this->deviceNameList = $deviceNameList;
        return $this;
    }


}

