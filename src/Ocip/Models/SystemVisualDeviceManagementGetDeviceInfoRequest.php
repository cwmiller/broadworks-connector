<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVisualDeviceManagementGetDeviceInfoRequest
 *
 * Get the information for a specified device supporting visual device management.
 *         The response is either a SystemVisualDeviceManagementGetDeviceInfoResponse or ErrorResponse.
 *
 * @see SystemVisualDeviceManagementGetDeviceInfoResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:19513","type":"sequence"}]
 */
class SystemVisualDeviceManagementGetDeviceInfoRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:19513
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

