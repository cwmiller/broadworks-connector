<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetRequest
 *
 * Requests the configuration of a specified system access device.
 *                 The response is either SystemAccessDeviceGetResponse or ErrorResponse.
 *                 Replaced By: SystemAccessDeviceGetRequest14sp3
 *
 * @see SystemAccessDeviceGetResponse
 * @see ErrorResponse
 * @see SystemAccessDeviceGetRequest14sp3
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:4081","type":"sequence"}]
 */
class SystemAccessDeviceGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4081
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

