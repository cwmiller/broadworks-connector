<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceGetEnhancedConfigurationTypeListResponse
 *
 * Response to ServiceProviderAccessDeviceGetEnhancedConfigurationTypeListRequest.
 *
 * @see ServiceProviderAccessDeviceGetEnhancedConfigurationTypeListRequest
 */
class ServiceProviderAccessDeviceGetEnhancedConfigurationTypeListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceType
     * @var string[]
     */
    private $deviceType = array(
        
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
    public function setDeviceType(array $deviceType)
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
    public function addDeviceType(string $deviceType)
    {
        $this->deviceType []= $deviceType;
        return $this;
    }


}

