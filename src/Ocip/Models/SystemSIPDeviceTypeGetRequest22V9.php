<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeGetRequest22V9
 *
 * Request to get a sip device type.
 *         See Also: SystemDeviceTypeGetRequest
 *         The response is either SystemSIPDeviceTypeGetResponse22V9 or ErrorResponse.
 *         
 *         Replaced By: SystemSIPDeviceTypeGetRequest23V4
 *
 * @see SystemDeviceTypeGetRequest
 * @see SystemSIPDeviceTypeGetResponse22V9
 * @see ErrorResponse
 * @see SystemSIPDeviceTypeGetRequest23V4
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:13210","type":"sequence"}]
 */
class SystemSIPDeviceTypeGetRequest22V9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:13210
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

