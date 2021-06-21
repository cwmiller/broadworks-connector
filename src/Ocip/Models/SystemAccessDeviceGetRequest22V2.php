<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetRequest22V2
 *
 * Requests the configuration of a specified system access device.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           deviceExternalId
 *         The response is either SystemAccessDeviceGetResponse22V2 or ErrorResponse.
 *         
 *         Replaced By: SystemAccessDeviceGetRequest24
 *
 * @see SystemAccessDeviceGetResponse22V2
 * @see ErrorResponse
 * @see SystemAccessDeviceGetRequest24
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:6502","type":"sequence","children":[{"id":"de4d76f01f337fe4694212ec9f771753:6503","type":"choice"}]}]
 */
class SystemAccessDeviceGetRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:6503
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName deviceExternalId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:6503
     * @MaxLength 36
     * @var string|null
     */
    private $deviceExternalId = null;

    /**
     * Getter for deviceName
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @param string $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceName()
    {
        $this->deviceName = null;
        return $this;
    }

    /**
     * Getter for deviceExternalId
     *
     * @return string
     */
    public function getDeviceExternalId()
    {
        return $this->deviceExternalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceExternalId;
    }

    /**
     * Setter for deviceExternalId
     *
     * @param string $deviceExternalId
     * @return $this
     */
    public function setDeviceExternalId($deviceExternalId)
    {
        $this->deviceExternalId = $deviceExternalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceExternalId()
    {
        $this->deviceExternalId = null;
        return $this;
    }


}

