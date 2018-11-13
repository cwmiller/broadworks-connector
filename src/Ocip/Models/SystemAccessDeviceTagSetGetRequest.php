<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceTagSetGetRequest
 *
 * Request to get the custom configuration tag set defined at the access device.
 *         The response is either SystemAccessDeviceTagSetGetResponse or
 * ErrorResponse.
 *
 * @see SystemAccessDeviceTagSetGetResponse
 * @see ErrorResponse
 */
class SystemAccessDeviceTagSetGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
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

