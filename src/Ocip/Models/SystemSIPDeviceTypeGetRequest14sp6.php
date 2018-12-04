<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeGetRequest14sp6
 *
 * Request to get a sip device type.
 *           See Also: SystemDeviceTypeGetRequest
 *           The response is either SystemSIPDeviceTypeGetResponse14sp6 or ErrorResponse.
 *           Replaced By : SystemSIPDeviceTypeGetRequest15
 *
 * @see SystemDeviceTypeGetRequest
 * @see SystemSIPDeviceTypeGetResponse14sp6
 * @see ErrorResponse
 * @see SystemSIPDeviceTypeGetRequest15
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:26247","type":"sequence"}]
 */
class SystemSIPDeviceTypeGetRequest14sp6 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:26247
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

