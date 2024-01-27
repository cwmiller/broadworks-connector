<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeGetRequest17sp4
 *
 * Replaced by: SystemSIPDeviceTypeGetRequest18.
 *         Request to get a sip device type.
 *         See Also: SystemDeviceTypeGetRequest
 *         The response is either SystemSIPDeviceTypeGetResponse17sp4 or ErrorResponse.
 *         Replaced by: SystemSIPDeviceTypeGetRequest18
 *
 * @see SystemSIPDeviceTypeGetRequest18
 * @see SystemDeviceTypeGetRequest
 * @see SystemSIPDeviceTypeGetResponse17sp4
 * @see ErrorResponse
 * @see SystemSIPDeviceTypeGetRequest18
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:32590","type":"sequence"}]
 */
class SystemSIPDeviceTypeGetRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:32590
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

