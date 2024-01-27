<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetEnhancedConfigurationTypeResponse14
 *
 * Response to GroupAccessDeviceGetEnhancedConfigurationTypeRequest14.
 *
 * @see GroupAccessDeviceGetEnhancedConfigurationTypeRequest14
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:846","type":"sequence"}]
 */
class GroupAccessDeviceGetEnhancedConfigurationTypeResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName supportsEnhancedConfiguration
     * @Type bool
     * @Group 4b0e7857796c636464362260a2f8e5ee:846
     * @var bool|null
     */
    protected $supportsEnhancedConfiguration = null;

    /**
     * @ElementName supportsReset
     * @Type bool
     * @Group 4b0e7857796c636464362260a2f8e5ee:846
     * @var bool|null
     */
    protected $supportsReset = null;

    /**
     * @ElementName configurationType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:846
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14|null
     */
    protected $configurationType = null;

    /**
     * @ElementName configurationFileName
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:846
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $configurationFileName = null;

    /**
     * Getter for supportsEnhancedConfiguration
     *
     * @return bool
     */
    public function getSupportsEnhancedConfiguration()
    {
        return $this->supportsEnhancedConfiguration instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportsEnhancedConfiguration;
    }

    /**
     * Setter for supportsEnhancedConfiguration
     *
     * @param bool $supportsEnhancedConfiguration
     * @return $this
     */
    public function setSupportsEnhancedConfiguration($supportsEnhancedConfiguration)
    {
        $this->supportsEnhancedConfiguration = $supportsEnhancedConfiguration;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportsEnhancedConfiguration()
    {
        $this->supportsEnhancedConfiguration = null;
        return $this;
    }

    /**
     * Getter for supportsReset
     *
     * @return bool
     */
    public function getSupportsReset()
    {
        return $this->supportsReset instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportsReset;
    }

    /**
     * Setter for supportsReset
     *
     * @param bool $supportsReset
     * @return $this
     */
    public function setSupportsReset($supportsReset)
    {
        $this->supportsReset = $supportsReset;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportsReset()
    {
        $this->supportsReset = null;
        return $this;
    }

    /**
     * Getter for configurationType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14
     */
    public function getConfigurationType()
    {
        return $this->configurationType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->configurationType;
    }

    /**
     * Setter for configurationType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14 $configurationType
     * @return $this
     */
    public function setConfigurationType(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14 $configurationType)
    {
        $this->configurationType = $configurationType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfigurationType()
    {
        $this->configurationType = null;
        return $this;
    }

    /**
     * Getter for configurationFileName
     *
     * @return string
     */
    public function getConfigurationFileName()
    {
        return $this->configurationFileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->configurationFileName;
    }

    /**
     * Setter for configurationFileName
     *
     * @param string $configurationFileName
     * @return $this
     */
    public function setConfigurationFileName($configurationFileName)
    {
        $this->configurationFileName = $configurationFileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfigurationFileName()
    {
        $this->configurationFileName = null;
        return $this;
    }
}

