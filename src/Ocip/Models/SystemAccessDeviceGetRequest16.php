<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetRequest16
 *
 * Requests the configuration of a specified system access device.
 *         The response is either SystemAccessDeviceGetResponse16 or ErrorResponse.
 *         
 *         Replaced by: SystemAccessDeviceGetRequest19
 *
 * @see SystemAccessDeviceGetResponse16
 * @see ErrorResponse
 * @see SystemAccessDeviceGetRequest19
 */
class SystemAccessDeviceGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

