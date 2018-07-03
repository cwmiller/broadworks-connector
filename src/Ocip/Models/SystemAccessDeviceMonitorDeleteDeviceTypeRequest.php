<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceMonitorDeleteDeviceTypeRequest
 *
 * Remove a device type to be monitored.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemAccessDeviceMonitorDeleteDeviceTypeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deleteAllDeviceTypes
     * @var bool|null
     */
    private $deleteAllDeviceTypes = null;

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * Getter for deleteAllDeviceTypes
     *
     * @ElementName deleteAllDeviceTypes
     * @return bool|null
     */
    public function getDeleteAllDeviceTypes()
    {
        return $this->deleteAllDeviceTypes;
    }

    /**
     * Setter for deleteAllDeviceTypes
     *
     * @ElementName deleteAllDeviceTypes
     * @param bool|null $deleteAllDeviceTypes
     * @return $this
     */
    public function setDeleteAllDeviceTypes($deleteAllDeviceTypes)
    {
        $this->deleteAllDeviceTypes = $deleteAllDeviceTypes;
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

