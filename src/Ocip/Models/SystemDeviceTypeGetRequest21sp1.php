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

