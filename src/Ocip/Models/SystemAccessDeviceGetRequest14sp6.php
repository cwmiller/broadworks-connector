<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetRequest14sp6
 *
 * Requests the configuration of a specified system access device.
 *         The response is either SystemAccessDeviceGetResponse14sp6 or ErrorResponse.
 *         Replaced by: SystemAccessDeviceGetRequest16
 *
 * @see SystemAccessDeviceGetResponse14sp6
 * @see ErrorResponse
 * @see SystemAccessDeviceGetRequest16
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:20268","type":"sequence"}]
 */
class SystemAccessDeviceGetRequest14sp6 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:20268
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

