<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetRequest22V3
 *
 * Requests the configuration of a specified system access device.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           deviceExternalId
 *         
 *         The response is either SystemAccessDeviceGetResponse22V3 or ErrorResponse.
 *         
 *         Replaced By: SystemAccessDeviceGetRequest24
 *
 * @see SystemAccessDeviceGetResponse22V3
 * @see ErrorResponse
 * @see SystemAccessDeviceGetRequest24
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:7556","type":"sequence","children":[{"id":"240b50f54d060859e5e275082fdf49f9:7557","type":"choice"}]}]
 */
class SystemAccessDeviceGetRequest22V3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceName
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:7557
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName deviceExternalId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:7557
     * @MaxLength 36
     * @var string|null
     */
    protected $deviceExternalId = null;

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

