<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetRequest16
 *
 * Requests the information about the specified device type without regard to
 * whether the
 *         type is SIP or MGCP.
 *         The response is either SystemDeviceTypeGetResponse16 or ErrorResponse.
 *         Replaced by: SystemDeviceTypeGetRequest16sp1
 *
 * @see SystemDeviceTypeGetResponse16
 * @see ErrorResponse
 * @see SystemDeviceTypeGetRequest16sp1
 */
class SystemDeviceTypeGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

