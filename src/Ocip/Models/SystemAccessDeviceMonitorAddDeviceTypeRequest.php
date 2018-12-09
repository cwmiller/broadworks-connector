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
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:1127","type":"sequence","children":[{"id":"b5f5416d9e71f8e4246cda16c4723744:1128","type":"choice"}]}]
 */
class SystemAccessDeviceMonitorAddDeviceTypeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName addAllDeviceTypes
     * @Type bool
     * @Group b5f5416d9e71f8e4246cda16c4723744:1128
     * @var bool|null
     */
    private $addAllDeviceTypes = null;

    /**
     * @ElementName deviceType
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:1128
     * @var string|null
     */
    private $deviceType = null;

    /**
     * Getter for addAllDeviceTypes
     *
     * @return bool
     */
    public function getAddAllDeviceTypes()
    {
        return $this->addAllDeviceTypes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->addAllDeviceTypes;
    }

    /**
     * Setter for addAllDeviceTypes
     *
     * @param bool $addAllDeviceTypes
     * @return $this
     */
    public function setAddAllDeviceTypes($addAllDeviceTypes)
    {
        $this->addAllDeviceTypes = $addAllDeviceTypes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAddAllDeviceTypes()
    {
        $this->addAllDeviceTypes = null;
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

