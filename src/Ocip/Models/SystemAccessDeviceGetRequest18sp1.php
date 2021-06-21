<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetRequest18sp1
 *
 * Requests the configuration of a specified system access device.
 *         The response is either SystemAccessDeviceGetResponse18sp1 or ErrorResponse.
 *         
 *         Replaced by: SystemAccessDeviceGetRequest22
 *
 * @see SystemAccessDeviceGetResponse18sp1
 * @see ErrorResponse
 * @see SystemAccessDeviceGetRequest22
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:6462","type":"sequence"}]
 */
class SystemAccessDeviceGetRequest18sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:6462
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

