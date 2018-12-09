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
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:16850","type":"sequence"}]
 */
class SystemAccessDeviceFileGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:16850
     * @var string|null
     */
    private $deviceName = null;

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

