<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceFileGetListRequest
 *
 * Request to get the list of device files managed by the Device Management System,
 * on a per-device profile basis.
 *           The response is either SystemAccessDeviceFileGetListResponse or
 * ErrorResponse.
 *           Replaced By: SystemAccessDeviceFileGetListRequest14sp8
 */
class SystemAccessDeviceFileGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @var string|null
     */
    private $deviceName = null;

    /**
     * Getter for deviceName
     *
     * @ElementName deviceName
     * @return string|null
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @ElementName deviceName
     * @param string|null $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }


}

