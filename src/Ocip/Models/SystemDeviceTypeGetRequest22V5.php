<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetRequest22V5
 *
 * Requests the information about the specified device type without regard to whether the
 *         type is SIP or MGCP.
 *         The response is either SystemDeviceTypeGetResponse22V5 or ErrorResponse.
 *         Note: The elements deviceTypeConfigurationOption and staticLineOrdering apply to SIP device types only. Therefore, only present in the response when the device type is SIP.
 *         Replaced by: SystemDeviceTypeGetRequest22V6 in AS data mode.
 *
 * @see SystemDeviceTypeGetResponse22V5
 * @see ErrorResponse
 * @see SystemDeviceTypeGetRequest22V6
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:10063","type":"sequence"}]
 */
class SystemDeviceTypeGetRequest22V5 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:10063
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

