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
 * @Groups [{"id":"584e9b2c2c8a6d282376c11d0e3ab848:200","type":"sequence","children":[{"id":"584e9b2c2c8a6d282376c11d0e3ab848:205","type":"sequence"}]}]
 */
class SystemSMDIMessageDeskModifyServerRouteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName routeDestination
     * @Type string
     * @Group 584e9b2c2c8a6d282376c11d0e3ab848:200
     * @var string|null
     */
    private $routeDestination = null;

    /**
     * @ElementName deviceNameList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRouteRequestDeviceNameList
     * @Optional
     * @Group 584e9b2c2c8a6d282376c11d0e3ab848:200
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRouteRequestDeviceNameList|null
     */
    private $deviceNameList = null;

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

    /**
     * Getter for deviceNameList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRouteRequestDeviceNameList
     */
    public function getDeviceNameList()
    {
        return $this->deviceNameList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceNameList;
    }

    /**
     * Setter for deviceNameList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRouteRequestDeviceNameList $deviceNameList
     * @return $this
     */
    public function setDeviceNameList(\CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRouteRequestDeviceNameList $deviceNameList)
    {
        $this->deviceNameList = $deviceNameList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceNameList()
    {
        $this->deviceNameList = null;
        return $this;
    }


}

