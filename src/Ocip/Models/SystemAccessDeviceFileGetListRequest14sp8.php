<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceFileGetListRequest14sp8
 *
 * Request to get the list of device files managed by the Device Management System,
 * on a per-device profile basis.
 *         The response is either SystemAccessDeviceFileGetListResponse14sp8 or
 * ErrorResponse.
 *
 * @see SystemAccessDeviceFileGetListResponse14sp8
 * @see ErrorResponse
 */
class SystemAccessDeviceFileGetListRequest14sp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
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

