<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceFileGetResponse
 *
 * Response to ServiceProviderAccessDeviceFileGetRequest.
 *           Replaced By: ServiceProviderAccessDeviceFileGetResponse14sp8
 *
 * @see ServiceProviderAccessDeviceFileGetRequest
 * @see ServiceProviderAccessDeviceFileGetResponse14sp8
 */
class ServiceProviderAccessDeviceFileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationMode|null
     */
    private $fileSource = null;

    /**
     * @ElementName configurationFileName
     * @var string|null
     */
    private $configurationFileName = null;

    /**
     * Getter for fileSource
     *
     * @ElementName fileSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationMode|null
     */
    public function getFileSource()
    {
        return $this->fileSource;
    }

    /**
     * Setter for fileSource
     *
     * @ElementName fileSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationMode|null $fileSource
     * @return $this
     */
    public function setFileSource(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationMode $fileSource)
    {
        $this->fileSource = $fileSource;
        return $this;
    }

    /**
     * Getter for configurationFileName
     *
     * @ElementName configurationFileName
     * @return string|null
     */
    public function getConfigurationFileName()
    {
        return $this->configurationFileName;
    }

    /**
     * Setter for configurationFileName
     *
     * @ElementName configurationFileName
     * @param string|null $configurationFileName
     * @return $this
     */
    public function setConfigurationFileName($configurationFileName)
    {
        $this->configurationFileName = $configurationFileName;
        return $this;
    }


}

