<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetAvailableListResponse22
 *
 * Response to SystemDeviceTypeGetAvailableListRequest22.
 *
 *         Note: element numberOfPorts is only used by devices types with static
 * line ordering enabled
 *
 * @see SystemDeviceTypeGetAvailableListRequest22
 */
class SystemDeviceTypeGetAvailableListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Array
     * @var string[]
     */
    private $deviceType = array(
        
    );

    /**
     * @ElementName typeInfo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse22TypeInfo
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse22TypeInfo[]
     */
    private $typeInfo = array(
        
    );

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

