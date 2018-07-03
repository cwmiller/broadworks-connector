<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeGetRequest17sp4
 *
 * Replaced by: SystemSIPDeviceTypeGetRequest18.
 *         Request to get a sip device type.
 *         See Also: SystemDeviceTypeGetRequest
 *         The response is either SystemSIPDeviceTypeGetResponse17sp4 or
 * ErrorResponse.
 *         Replaced by: SystemSIPDeviceTypeGetRequest18
 *
 * @see SystemSIPDeviceTypeGetRequest18
 * @see SystemDeviceTypeGetRequest
 * @see SystemSIPDeviceTypeGetResponse17sp4
 * @see ErrorResponse
 * @see SystemSIPDeviceTypeGetRequest18
 */
class SystemSIPDeviceTypeGetRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * Getter for deviceType
     *
     * @ElementName deviceType
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @ElementName deviceType
     * @param string|null $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }


}

