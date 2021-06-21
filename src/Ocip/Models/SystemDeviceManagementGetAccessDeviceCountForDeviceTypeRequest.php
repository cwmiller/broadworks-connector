<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementGetAccessDeviceCountForDeviceTypeRequest
 *
 * Request the number of access device of a particular device type or all
 *         device types if deviceType is not specified.
 *         If countOnlyResetSupportedDevice is true, count only access devices if the device type supports reset.
 *         By default unmanaged device types are not allowed and devices are counted only if their device type supports Device Management.
 *         An error is returned if deviceType is specified but does not support device management.
 *         When allowUnmanagedDeviceType is true, unmanaged device type will be counted and a successful response is returned.
 *         The response is either SystemDeviceManagementGetAccessDeviceCountForDeviceTypeResponse or ErrorResponse.
 *
 * @see SystemDeviceManagementGetAccessDeviceCountForDeviceTypeResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7797","type":"sequence"}]
 */
class SystemDeviceManagementGetAccessDeviceCountForDeviceTypeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7797
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName countOnlyResetSupportedDevice
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7797
     * @var bool|null
     */
    private $countOnlyResetSupportedDevice = null;

    /**
     * @ElementName allowUnmanagedDeviceType
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7797
     * @var bool|null
     */
    private $allowUnmanagedDeviceType = null;

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

    /**
     * Getter for countOnlyResetSupportedDevice
     *
     * @return bool
     */
    public function getCountOnlyResetSupportedDevice()
    {
        return $this->countOnlyResetSupportedDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countOnlyResetSupportedDevice;
    }

    /**
     * Setter for countOnlyResetSupportedDevice
     *
     * @param bool $countOnlyResetSupportedDevice
     * @return $this
     */
    public function setCountOnlyResetSupportedDevice($countOnlyResetSupportedDevice)
    {
        $this->countOnlyResetSupportedDevice = $countOnlyResetSupportedDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountOnlyResetSupportedDevice()
    {
        $this->countOnlyResetSupportedDevice = null;
        return $this;
    }

    /**
     * Getter for allowUnmanagedDeviceType
     *
     * @return bool
     */
    public function getAllowUnmanagedDeviceType()
    {
        return $this->allowUnmanagedDeviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowUnmanagedDeviceType;
    }

    /**
     * Setter for allowUnmanagedDeviceType
     *
     * @param bool $allowUnmanagedDeviceType
     * @return $this
     */
    public function setAllowUnmanagedDeviceType($allowUnmanagedDeviceType)
    {
        $this->allowUnmanagedDeviceType = $allowUnmanagedDeviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowUnmanagedDeviceType()
    {
        $this->allowUnmanagedDeviceType = null;
        return $this;
    }


}

