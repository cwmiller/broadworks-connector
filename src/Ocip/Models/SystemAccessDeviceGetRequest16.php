<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetRequest16
 *
 * Requests the configuration of a specified system access device.
 *                 The response is either SystemAccessDeviceGetResponse16 or ErrorResponse.
 *
 *                 Replaced by: SystemAccessDeviceGetRequest19
 *
 * @see SystemAccessDeviceGetResponse16
 * @see ErrorResponse
 * @see SystemAccessDeviceGetRequest19
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:25846","type":"sequence"}]
 */
class SystemAccessDeviceGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25846
     * @MinLength 1
     * @MaxLength 40
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

