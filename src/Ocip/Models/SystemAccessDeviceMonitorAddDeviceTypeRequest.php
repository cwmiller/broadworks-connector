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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:1598","type":"sequence","children":[{"id":"da582a1f8028404e70d260cf1f891033:1599","type":"choice"}]}]
 */
class SystemAccessDeviceMonitorAddDeviceTypeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName addAllDeviceTypes
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:1599
     * @var bool|null
     */
    protected $addAllDeviceTypes = null;

    /**
     * @ElementName deviceType
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:1599
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

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

