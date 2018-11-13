<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetRequest21sp1
 *
 * Requests the information about the specified device type without regard to
 * whether the
 *         type is SIP or MGCP.
 *         The response is either SystemDeviceTypeGetResponse21sp1 or
 * ErrorResponse.
 *         Note: The elements deviceTypeConfigurationOption and staticLineOrdering
 * apply to SIP device types only. Therefore, only present in the response when the
 * device type is SIP.
 *         
 *         Replaced by SystemDeviceTypeGetRequest22 in AS data mode.
 *
 * @see SystemDeviceTypeGetResponse21sp1
 * @see ErrorResponse
 * @see SystemDeviceTypeGetRequest22
 */
class SystemDeviceTypeGetRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

