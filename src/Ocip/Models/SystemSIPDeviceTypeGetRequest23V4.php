<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeGetRequest23V4
 *
 * Request to get a sip device type.
 *         See Also: SystemDeviceTypeGetRequest
 *         The response is either SystemSIPDeviceTypeGetResponse23V4 or ErrorResponse.
 *         
 *         Replaced by: SystemSIPDeviceTypeGetRequest23V5 in AS data mode.
 *
 * @see SystemDeviceTypeGetRequest
 * @see SystemSIPDeviceTypeGetResponse23V4
 * @see ErrorResponse
 * @see SystemSIPDeviceTypeGetRequest23V5
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:10340","type":"sequence"}]
 */
class SystemSIPDeviceTypeGetRequest23V4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:10340
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

