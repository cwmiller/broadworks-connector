<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetAvailableListResponse22
 *
 * Response to SystemDeviceTypeGetAvailableListRequest22.
 *         Note: element numberOfPorts is only used by devices types with static line ordering enabled
 *         
 *         Replaced by: SystemDeviceTypeGetAvailableListResponse22V2 in AS data mode.
 *
 * @see SystemDeviceTypeGetAvailableListRequest22
 * @see SystemDeviceTypeGetAvailableListResponse22V2
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:9967","type":"sequence"}]
 */
class SystemDeviceTypeGetAvailableListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Array
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:9967
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $deviceType = [
        
    ];

    /**
     * @ElementName typeInfo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse22TypeInfo
     * @Array
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:9967
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse22TypeInfo[]
     */
    protected $typeInfo = [
        
    ];

    /**
     * Getter for deviceType
     *
     * @return string[]
     */
    public function getDeviceType()
    {
        return $this->deviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @param string[] $deviceType
     * @return $this
     */
    public function setDeviceType(array $deviceType)
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
     * Adder for deviceType
     *
     * @param string $deviceType
     * @return $this
     */
    public function addDeviceType(string $deviceType)
    {
        $this->deviceType[] = $deviceType;
        return $this;
    }

    /**
     * Getter for typeInfo
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse22TypeInfo[]
     */
    public function getTypeInfo()
    {
        return $this->typeInfo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->typeInfo;
    }

    /**
     * Setter for typeInfo
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse22TypeInfo[] $typeInfo
     * @return $this
     */
    public function setTypeInfo(array $typeInfo)
    {
        $this->typeInfo = $typeInfo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTypeInfo()
    {
        $this->typeInfo = null;
        return $this;
    }

    /**
     * Adder for typeInfo
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse22TypeInfo $typeInfo
     * @return $this
     */
    public function addTypeInfo($typeInfo)
    {
        $this->typeInfo[] = $typeInfo;
        return $this;
    }
}

