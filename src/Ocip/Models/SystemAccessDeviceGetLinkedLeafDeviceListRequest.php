<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetLinkedLeafDeviceListRequest
 *
 * Requests the list of linked leaf devices for the system level tree device passed in the request.
 *         A tree device is a device associated with a device type that has the option 
 *         supportLinks set to "Support Links from Devices". Many leaf devices can be linked to it.
 *         A leaf device is a device associated with a device type that has the option
 *         supportLinks set to "Support Link to Device". It can be linked to only one tree device.
 *         The list includes devices created at the system, service provider, and group levels.
 *         The response is either SystemAccessDeviceGetLinkedLeafDeviceListResponse or
 *         ErrorResponse.
 *         
 *         Replaced by: SystemAccessDeviceGetLinkedLeafDeviceListRequest22.
 *
 * @see SystemAccessDeviceGetLinkedLeafDeviceListResponse
 * @see ErrorResponse
 * @see SystemAccessDeviceGetLinkedLeafDeviceListRequest22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:20200","type":"sequence"}]
 */
class SystemAccessDeviceGetLinkedLeafDeviceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:20200
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * Getter for deviceName
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @param string $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceName()
    {
        $this->deviceName = null;
        return $this;
    }
}

