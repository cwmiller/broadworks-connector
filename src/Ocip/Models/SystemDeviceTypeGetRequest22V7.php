<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetRequest22V7
 *
 * Requests the information about the specified device type without regard to whether the
 *         type is SIP or MGCP.
 *         The response is either SystemDeviceTypeGetResponse22V7 or ErrorResponse.
 *     Note: The elements deviceTypeConfigurationOption and staticLineOrdering apply to SIP device types only. Therefore, only present in the response when the device type is SIP.
 *
 * @see SystemDeviceTypeGetResponse22V7
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:8885","type":"sequence"}]
 */
class SystemDeviceTypeGetRequest22V7 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:8885
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

