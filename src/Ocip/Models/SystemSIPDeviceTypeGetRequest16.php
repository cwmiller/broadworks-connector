<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeGetRequest16
 *
 * Request to get a sip device type.
 *           See Also: SystemDeviceTypeGetRequest
 *           The response is either SystemSIPDeviceTypeGetResponse16 or
 * ErrorResponse.
 *           Replaced by: SystemSIPDeviceTypeGetRequest16sp1
 */
class SystemSIPDeviceTypeGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

