<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementGetAccessDeviceCountForDeviceTypeRequest
 *
 * Request the number of access device of a particular device type or all
 *         device types if deviceType is not specified.
 *         If countOnlyResetSupportedDevice is true, count only access devices if
 * the device type supports reset.
 *         By default unmanaged device types are not allowed and devices are
 * counted only if their device type supports Device Management.
 *         An error is returned if deviceType is specified but does not support
 * device management.
 *         When allowUnmanagedDeviceType is true, unmanaged device type will be
 * counted and a successful response is returned.
 *         The response is either
 * SystemDeviceManagementGetAccessDeviceCountForDeviceTypeResponse or
 * ErrorResponse.
 *
 * @see SystemDeviceManagementGetAccessDeviceCountForDeviceTypeResponse
 * @see ErrorResponse
 */
class SystemDeviceManagementGetAccessDeviceCountForDeviceTypeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName countOnlyResetSupportedDevice
     * @var bool|null
     */
    private $countOnlyResetSupportedDevice = null;

    /**
     * @ElementName allowUnmanagedDeviceType
     * @var bool|null
     */
    private $allowUnmanagedDeviceType = null;

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

    /**
     * Getter for countOnlyResetSupportedDevice
     *
     * @ElementName countOnlyResetSupportedDevice
     * @return bool|null
     */
    public function getCountOnlyResetSupportedDevice()
    {
        return $this->countOnlyResetSupportedDevice;
    }

    /**
     * Setter for countOnlyResetSupportedDevice
     *
     * @ElementName countOnlyResetSupportedDevice
     * @param bool|null $countOnlyResetSupportedDevice
     * @return $this
     */
    public function setCountOnlyResetSupportedDevice($countOnlyResetSupportedDevice)
    {
        $this->countOnlyResetSupportedDevice = $countOnlyResetSupportedDevice;
        return $this;
    }

    /**
     * Getter for allowUnmanagedDeviceType
     *
     * @ElementName allowUnmanagedDeviceType
     * @return bool|null
     */
    public function getAllowUnmanagedDeviceType()
    {
        return $this->allowUnmanagedDeviceType;
    }

    /**
     * Setter for allowUnmanagedDeviceType
     *
     * @ElementName allowUnmanagedDeviceType
     * @param bool|null $allowUnmanagedDeviceType
     * @return $this
     */
    public function setAllowUnmanagedDeviceType($allowUnmanagedDeviceType)
    {
        $this->allowUnmanagedDeviceType = $allowUnmanagedDeviceType;
        return $this;
    }


}

