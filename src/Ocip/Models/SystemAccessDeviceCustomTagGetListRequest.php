<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceCustomTagGetListRequest
 *
 * Request to get the list of custom configuration tags managed by the Device
 * Management System, on a per-device profile basis.
 *         The response is either SystemAccessDeviceCustomTagGetListResponse or
 * ErrorResponse.
 *
 * @see SystemAccessDeviceCustomTagGetListResponse
 * @see ErrorResponse
 */
class SystemAccessDeviceCustomTagGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

