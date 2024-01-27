<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetRequest14sp6
 *
 * Requests the information about the specified device type without regard to whether the
 *         type is SIP or MGCP.
 *         The response is either SystemDeviceTypeGetResponse14sp6 or ErrorResponse.
 *         Replaced by: SystemDeviceTypeGetRequest16
 *
 * @see SystemDeviceTypeGetResponse14sp6
 * @see ErrorResponse
 * @see SystemDeviceTypeGetRequest16
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:26386","type":"sequence"}]
 */
class SystemDeviceTypeGetRequest14sp6 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:26386
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

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

