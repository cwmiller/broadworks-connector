<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeGetRequest15
 *
 * Request to get a sip device type.
 *             See Also: SystemDeviceTypeGetRequest
 *             The response is either SystemSIPDeviceTypeGetResponse15 or
 * ErrorResponse.
 *             Replaced By : SystemSIPDeviceTypeGetRequest16
 */
class SystemSIPDeviceTypeGetRequest15 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
