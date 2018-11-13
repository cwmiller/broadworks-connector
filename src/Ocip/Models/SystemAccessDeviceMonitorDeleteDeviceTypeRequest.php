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
     * @Type bool
     * @var bool|null
     */
    private $deleteAllDeviceTypes = null;

    /**
     * @ElementName deviceType
     * @Type string
     * @var string|null
     */
    private $deviceType = null;

    /**
     * Getter for deleteAllDeviceTypes
     *
     * @return bool
     */
    public function getDeleteAllDeviceTypes()
    {
        return $this->deleteAllDeviceTypes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteAllDeviceTypes;
    }

    /**
     * Setter for deleteAllDeviceTypes
     *
     * @param bool $deleteAllDeviceTypes
     * @return $this
     */
    public function setDeleteAllDeviceTypes($deleteAllDeviceTypes)
    {
        $this->deleteAllDeviceTypes = $deleteAllDeviceTypes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeleteAllDeviceTypes()
    {
        $this->deleteAllDeviceTypes = null;
        return $this;
    }

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

