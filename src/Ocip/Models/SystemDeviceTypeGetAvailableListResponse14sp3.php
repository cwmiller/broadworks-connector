<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetAvailableListResponse14sp3
 *
 * Response to SystemDeviceTypeGetAvailableListRequest14sp3.
 *
 * @see SystemDeviceTypeGetAvailableListRequest14sp3
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:26317","type":"sequence"}]
 */
class SystemDeviceTypeGetAvailableListResponse14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:26317
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $deviceType = [
        
    ];

    /**
     * @ElementName typeInfo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse14sp3TypeInfo
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:26317
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse14sp3TypeInfo[]
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse14sp3TypeInfo[]
     */
    public function getTypeInfo()
    {
        return $this->typeInfo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->typeInfo;
    }

    /**
     * Setter for typeInfo
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse14sp3TypeInfo[] $typeInfo
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse14sp3TypeInfo $typeInfo
     * @return $this
     */
    public function addTypeInfo($typeInfo)
    {
        $this->typeInfo[] = $typeInfo;
        return $this;
    }
}

