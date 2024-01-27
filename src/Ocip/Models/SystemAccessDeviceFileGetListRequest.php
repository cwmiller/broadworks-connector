<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceFileGetListRequest
 *
 * Request to get the list of device files managed by the Device Management System, on a per-device profile basis.
 *           The response is either SystemAccessDeviceFileGetListResponse or ErrorResponse.
 *           Replaced By: SystemAccessDeviceFileGetListRequest14sp8
 *
 * @see SystemAccessDeviceFileGetListResponse
 * @see ErrorResponse
 * @see SystemAccessDeviceFileGetListRequest14sp8
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:20028","type":"sequence"}]
 */
class SystemAccessDeviceFileGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:20028
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

