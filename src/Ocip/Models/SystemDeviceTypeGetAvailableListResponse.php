<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetAvailableListResponse
 *
 * Response to SystemDeviceTypeGetAvailableListRequest.
 */
class SystemDeviceTypeGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceType
     * @var string[]
     */
    private $deviceType = array(
        
    );

    /**
     * @ElementName typeInfo
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse\TypeInfo[]
     */
    private $typeInfo = array(
        
    );

    /**
     * Getter for deviceType
     *
     * @ElementName deviceType
     * @return string[]
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @ElementName deviceType
     * @param string[] $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * Adder for deviceType
     *
     * @ElementName deviceType
     * @param string $deviceType
     * @return $this
     */
    public function addDeviceType($deviceType)
    {
        $this->deviceType []= $deviceType;
        return $this;
    }

    /**
     * Getter for typeInfo
     *
     * @ElementName typeInfo
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse\TypeInfo[]
     */
    public function getTypeInfo()
    {
        return $this->typeInfo;
    }

    /**
     * Setter for typeInfo
     *
     * @ElementName typeInfo
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse\TypeInfo[] $typeInfo
     * @return $this
     */
    public function setTypeInfo($typeInfo)
    {
        $this->typeInfo = $typeInfo;
        return $this;
    }

    /**
     * Adder for typeInfo
     *
     * @ElementName typeInfo
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse\TypeInfo $typeInfo
     * @return $this
     */
    public function addTypeInfo($typeInfo)
    {
        $this->typeInfo []= $typeInfo;
        return $this;
    }


}

