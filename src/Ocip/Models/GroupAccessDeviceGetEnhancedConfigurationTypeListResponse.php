<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetEnhancedConfigurationTypeListResponse
 *
 * Response to GroupAccessDeviceGetEnhancedConfigurationTypeListRequest.
 *
 * @see GroupAccessDeviceGetEnhancedConfigurationTypeListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:812","type":"sequence"}]
 */
class GroupAccessDeviceGetEnhancedConfigurationTypeListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:812
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $deviceType = [
        
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
}

