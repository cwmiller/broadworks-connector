<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetRequest22
 *
 * Requests the configuration of a specified system access device.
 *         The response is either SystemAccessDeviceGetResponse22 or ErrorResponse.
 *         
 *         Replaced by: SystemAccessDeviceGetRequest24
 *
 * @see SystemAccessDeviceGetResponse22
 * @see ErrorResponse
 * @see SystemAccessDeviceGetRequest24
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:6480","type":"sequence"}]
 */
class SystemAccessDeviceGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:6480
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

