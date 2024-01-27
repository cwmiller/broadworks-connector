<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileGetListRequest14sp8
 *
 * Request to get the list of device files managed by the Device Management System, on a per-device type basis.
 *         The response is either SystemSIPDeviceTypeFileGetListResponse14sp8 or ErrorResponse.
 *
 * @see SystemSIPDeviceTypeFileGetListResponse14sp8
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:17200","type":"sequence"}]
 */
class SystemSIPDeviceTypeFileGetListRequest14sp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:17200
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

    /**
     * Getter for deviceType
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @param string $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceType()
    {
        $this->deviceType = null;
        return $this;
    }
}

