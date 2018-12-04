<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetRequest14sp3
 *
 * Requests the information about the specified device type without regard to whether the
 *         type is SIP or MGCP.
 *         The response is either SystemDeviceTypeGetResponse14sp3 or ErrorResponse.
 *         Replaced By: SystemDeviceTypeGetRequest14sp6
 *
 * @see SystemDeviceTypeGetResponse14sp3
 * @see ErrorResponse
 * @see SystemDeviceTypeGetRequest14sp6
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:21713","type":"sequence"}]
 */
class SystemDeviceTypeGetRequest14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:21713
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

