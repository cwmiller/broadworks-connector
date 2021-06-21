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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:1565","type":"sequence","children":[{"id":"7f663d5135470c33ca64b0eed3c3aa0c:1566","type":"choice"}]}]
 */
class SystemAccessDeviceMonitorAddDeviceTypeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName addAllDeviceTypes
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1566
     * @var bool|null
     */
    private $addAllDeviceTypes = null;

    /**
     * @ElementName deviceType
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1566
     * @MinLength 1
     * @MaxLength 40
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

