<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceMonitorAddDeviceTypeRequest
 *
 * Add a device type to be monitored.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemAccessDeviceMonitorAddDeviceTypeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName addAllDeviceTypes
     * @var bool|null
     */
    private $addAllDeviceTypes = null;

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * Getter for addAllDeviceTypes
     *
     * @ElementName addAllDeviceTypes
     * @return bool|null
     */
    public function getAddAllDeviceTypes()
    {
        return $this->addAllDeviceTypes;
    }

    /**
     * Setter for addAllDeviceTypes
     *
     * @ElementName addAllDeviceTypes
     * @param bool|null $addAllDeviceTypes
     * @return $this
     */
    public function setAddAllDeviceTypes($addAllDeviceTypes)
    {
        $this->addAllDeviceTypes = $addAllDeviceTypes;
        return $this;
    }

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

