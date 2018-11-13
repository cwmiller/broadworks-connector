<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMGCPDeviceTypeGetRequest
 *
 * Request to get a mgcp device type.
 *         See Also: SystemDeviceTypeGetRequest
 *         The response is either SystemMGCPDeviceTypeGetResponse or ErrorResponse.
 *
 * @see SystemDeviceTypeGetRequest
 * @see SystemMGCPDeviceTypeGetResponse
 * @see ErrorResponse
 */
class SystemMGCPDeviceTypeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

