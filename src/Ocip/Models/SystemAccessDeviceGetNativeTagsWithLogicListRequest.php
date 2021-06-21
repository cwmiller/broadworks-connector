<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetNativeTagsWithLogicListRequest
 *
 * Get the list of all native tags with logic managed by the Device Management System, on a per-device profile basis.
 *         The response is either SystemAccessDeviceGetNativeTagsWithLogicListResponse or ErrorResponse.
 *
 * @see SystemAccessDeviceGetNativeTagsWithLogicListResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:1268","type":"sequence"}]
 */
class SystemAccessDeviceGetNativeTagsWithLogicListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1268
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $deviceName = null;

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


}

