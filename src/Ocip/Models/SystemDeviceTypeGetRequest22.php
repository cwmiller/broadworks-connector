<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetRequest22
 *
 * Requests the information about the specified device type without regard to whether the
 *         type is SIP or MGCP.
 *         The response is either SystemDeviceTypeGetResponse22 or ErrorResponse.
 *     Note: The elements deviceTypeConfigurationOption and staticLineOrdering apply to SIP device types only. Therefore, only present in the response when the device type is SIP.
 *
 * @see SystemDeviceTypeGetResponse22
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:26088","type":"sequence"}]
 */
class SystemDeviceTypeGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26088
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $deviceType = null;

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

