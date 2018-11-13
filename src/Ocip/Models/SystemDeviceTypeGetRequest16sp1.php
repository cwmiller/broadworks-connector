<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetRequest16sp1
 *
 * Replaced by: SystemDeviceTypeGetRequest18.
 *         Requests the information about the specified device type without regard
 * to whether the
 *         type is SIP or MGCP.
 *         The response is either SystemDeviceTypeGetResponse16sp1 or
 * ErrorResponse.
 *
 * @see SystemDeviceTypeGetRequest18
 * @see SystemDeviceTypeGetResponse16sp1
 * @see ErrorResponse
 */
class SystemDeviceTypeGetRequest16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
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

