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
 * @Groups [{"id":"aa3a240fa755015613cfb9259eccafef:200","type":"sequence"}]
 */
class SystemSMDIMessageDeskModifyServerRouteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName routeDestination
     * @Type string
     * @Group aa3a240fa755015613cfb9259eccafef:200
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    protected $routeDestination = null;

    /**
     * @ElementName deviceNameList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRouteRequestDeviceNameList
     * @Optional
     * @Group aa3a240fa755015613cfb9259eccafef:200
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRouteRequestDeviceNameList|null
     */
    protected $deviceNameList = null;

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

