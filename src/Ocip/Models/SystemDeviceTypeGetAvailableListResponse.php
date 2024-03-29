<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetAvailableListResponse
 *
 * Response to SystemDeviceTypeGetAvailableListRequest.
 *
 * @see SystemDeviceTypeGetAvailableListRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:26261","type":"sequence"}]
 */
class SystemDeviceTypeGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:26261
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $deviceType = [
        
    ];

    /**
     * @ElementName typeInfo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponseTypeInfo
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:26261
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponseTypeInfo[]
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponseTypeInfo[]
     */
    public function getTypeInfo()
    {
        return $this->typeInfo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->typeInfo;
    }

    /**
     * Setter for typeInfo
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponseTypeInfo[] $typeInfo
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponseTypeInfo $typeInfo
     * @return $this
     */
    public function addTypeInfo($typeInfo)
    {
        $this->typeInfo[] = $typeInfo;
        return $this;
    }
}

