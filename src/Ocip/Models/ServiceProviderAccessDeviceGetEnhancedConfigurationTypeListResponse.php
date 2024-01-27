<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceGetEnhancedConfigurationTypeListResponse
 *
 * Response to ServiceProviderAccessDeviceGetEnhancedConfigurationTypeListRequest.
 *
 * @see ServiceProviderAccessDeviceGetEnhancedConfigurationTypeListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:688","type":"sequence"}]
 */
class ServiceProviderAccessDeviceGetEnhancedConfigurationTypeListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceType
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:688
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

