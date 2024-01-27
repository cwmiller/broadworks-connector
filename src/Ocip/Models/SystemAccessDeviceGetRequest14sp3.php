<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetRequest14sp3
 *
 * Requests the configuration of a specified system access device.
 *         The response is either SystemAccessDeviceGetResponse14sp3 or ErrorResponse.
 *         Replaced By: SystemAccessDeviceGetRequest14sp6
 *
 * @see SystemAccessDeviceGetResponse14sp3
 * @see ErrorResponse
 * @see SystemAccessDeviceGetRequest14sp6
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:20251","type":"sequence"}]
 */
class SystemAccessDeviceGetRequest14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:20251
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

