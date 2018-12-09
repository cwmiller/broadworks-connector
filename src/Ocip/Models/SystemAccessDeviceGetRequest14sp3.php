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
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:17032","type":"sequence"}]
 */
class SystemAccessDeviceGetRequest14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:17032
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

