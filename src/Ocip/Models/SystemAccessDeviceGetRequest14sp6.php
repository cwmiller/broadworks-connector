<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetRequest14sp6
 *
 * Requests the configuration of a specified system access device.
 *         The response is either SystemAccessDeviceGetResponse14sp6 or
 * ErrorResponse.
 *         Replaced by: SystemAccessDeviceGetRequest16
 */
class SystemAccessDeviceGetRequest14sp6 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

