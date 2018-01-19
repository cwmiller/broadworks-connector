<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileGetListRequest14sp8
 *
 * Request to get the list of device files managed by the Device Management System,
 * on a per-device type basis.
 *         The response is either SystemSIPDeviceTypeFileGetListResponse14sp8 or
 * ErrorResponse.
 */
class SystemSIPDeviceTypeFileGetListRequest14sp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
