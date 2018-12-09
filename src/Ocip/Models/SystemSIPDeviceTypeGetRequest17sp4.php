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
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:26338","type":"sequence"}]
 */
class SystemSIPDeviceTypeGetRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:26338
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

