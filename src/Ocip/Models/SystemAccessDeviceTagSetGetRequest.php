<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceTagSetGetRequest
 *
 * Request to get the custom configuration tag set defined at the access device.
 *         The response is either SystemAccessDeviceTagSetGetResponse or ErrorResponse.
 *
 * @see SystemAccessDeviceTagSetGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:1694","type":"sequence"}]
 */
class SystemAccessDeviceTagSetGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1694
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

