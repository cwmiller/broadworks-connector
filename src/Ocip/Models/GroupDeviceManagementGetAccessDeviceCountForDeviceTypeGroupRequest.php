<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupRequest
 *
 * Request the number of access device of a particular device type and group.
 *         If countOnlyResetSupportedDevice is true, count only access devices if the device type supports reset.        
 *         By default unmanaged device types are not allowed and devices are counted only if their device type supports Device Management.
 *         An error is returned if deviceType is specified but does not support device management.
 *         When allowUnmanagedDeviceType is true, unmanaged device type will be counted and a successful response is returned.
 *         The response is either GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupResponse or ErrorResponse.
 *
 * @see GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:3331","type":"sequence"}]
 */
class GroupDeviceManagementGetAccessDeviceCountForDeviceTypeGroupRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3331
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3331
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName deviceType
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3331
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName countOnlyResetSupportedDevice
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3331
     * @var bool|null
     */
    private $countOnlyResetSupportedDevice = null;

    /**
     * @ElementName allowUnmanagedDeviceType
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3331
     * @var bool|null
     */
    private $allowUnmanagedDeviceType = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
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

