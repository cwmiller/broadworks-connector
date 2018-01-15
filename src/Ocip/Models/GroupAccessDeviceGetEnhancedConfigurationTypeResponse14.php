<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetEnhancedConfigurationTypeResponse14
 *
 * Response to GroupAccessDeviceGetEnhancedConfigurationTypeRequest14.
 */
class GroupAccessDeviceGetEnhancedConfigurationTypeResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName supportsEnhancedConfiguration
     * @var bool|null
     */
    private $supportsEnhancedConfiguration = null;

    /**
     * @ElementName supportsReset
     * @var bool|null
     */
    private $supportsReset = null;

    /**
     * @ElementName configurationType
     * @var string|null
     */
    private $configurationType = null;

    /**
     * @ElementName configurationFileName
     * @var string|null
     */
    private $configurationFileName = null;

    /**
     * Getter for supportsEnhancedConfiguration
     *
     * @ElementName supportsEnhancedConfiguration
     * @return bool|null
     */
    public function getSupportsEnhancedConfiguration()
    {
        return $this->supportsEnhancedConfiguration;
    }

    /**
     * Setter for supportsEnhancedConfiguration
     *
     * @ElementName supportsEnhancedConfiguration
     * @param bool|null $supportsEnhancedConfiguration
     * @return $this
     */
    public function setSupportsEnhancedConfiguration($supportsEnhancedConfiguration)
    {
        $this->supportsEnhancedConfiguration = $supportsEnhancedConfiguration;
        return $this;
    }

    /**
     * Getter for supportsReset
     *
     * @ElementName supportsReset
     * @return bool|null
     */
    public function getSupportsReset()
    {
        return $this->supportsReset;
    }

    /**
     * Setter for supportsReset
     *
     * @ElementName supportsReset
     * @param bool|null $supportsReset
     * @return $this
     */
    public function setSupportsReset($supportsReset)
    {
        $this->supportsReset = $supportsReset;
        return $this;
    }

    /**
     * Getter for configurationType
     *
     * @ElementName configurationType
     * @return string|null
     */
    public function getConfigurationType()
    {
        return $this->configurationType;
    }

    /**
     * Setter for configurationType
     *
     * @ElementName configurationType
     * @param string|null $configurationType
     * @return $this
     */
    public function setConfigurationType($configurationType)
    {
        $this->configurationType = $configurationType;
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

