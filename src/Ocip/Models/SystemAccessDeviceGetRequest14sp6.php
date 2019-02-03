<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetRequest14sp6
 *
 * Requests the configuration of a specified system access device.
 *                 The response is either SystemAccessDeviceGetResponse14sp6 or ErrorResponse.
 *                 Replaced by: SystemAccessDeviceGetRequest16
 *
 * @see SystemAccessDeviceGetResponse14sp6
 * @see ErrorResponse
 * @see SystemAccessDeviceGetRequest16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:9892","type":"sequence"}]
 */
class SystemAccessDeviceGetRequest14sp6 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9892
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

