<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CPEDeviceOptions22V6
 *
 * CPE device's options.
 *     
 *     The field configType is optional to allow the use of field enableMonitoring for all device types being managed or not
 *     ie. device configuration option equals to DeviceManagement, or Legacy, or Not Supported).
 *     
 *     If the device configuration option is set to "Not Supported", the value of configType is forced set to "None" regardless 
 *     of its current value.
 *     
 *     It is not allowed to add a device type with device configuration option set to Device Management or Legacy when the configType
 *     is not set.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:2049","type":"sequence"}]
 */
class CPEDeviceOptions22V6
{
    /**
     * @ElementName enableMonitoring
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2049
     * @var bool|null
     */
    protected $enableMonitoring = null;

    /**
     * @ElementName configType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2049
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14|null
     */
    protected $configType = null;

    /**
     * @ElementName systemFileName
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2049
     * @MinLength 1
     * @MaxLength 265
     * @var string|null
     */
    protected $systemFileName = null;

    /**
     * @ElementName deviceFileFormat
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2049
     * @MinLength 1
     * @MaxLength 265
     * @var string|null
     */
    protected $deviceFileFormat = null;

    /**
     * @ElementName deviceManagementDeviceTypeOptions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeOptions22V6
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2049
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeOptions22V6|null
     */
    protected $deviceManagementDeviceTypeOptions = null;

    /**
     * Getter for enableMonitoring
     *
     * @return bool
     */
    public function getEnableMonitoring()
    {
        return $this->enableMonitoring instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableMonitoring;
    }

    /**
     * Setter for enableMonitoring
     *
     * @param bool $enableMonitoring
     * @return $this
     */
    public function setEnableMonitoring($enableMonitoring)
    {
        $this->enableMonitoring = $enableMonitoring;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableMonitoring()
    {
        $this->enableMonitoring = null;
        return $this;
    }

    /**
     * Getter for configType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14
     */
    public function getConfigType()
    {
        return $this->configType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->configType;
    }

    /**
     * Setter for configType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14 $configType
     * @return $this
     */
    public function setConfigType(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14 $configType)
    {
        $this->configType = $configType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfigType()
    {
        $this->configType = null;
        return $this;
    }

    /**
     * Getter for systemFileName
     *
     * @return string
     */
    public function getSystemFileName()
    {
        return $this->systemFileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemFileName;
    }

    /**
     * Setter for systemFileName
     *
     * @param string $systemFileName
     * @return $this
     */
    public function setSystemFileName($systemFileName)
    {
        $this->systemFileName = $systemFileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSystemFileName()
    {
        $this->systemFileName = null;
        return $this;
    }

    /**
     * Getter for deviceFileFormat
     *
     * @return string
     */
    public function getDeviceFileFormat()
    {
        return $this->deviceFileFormat instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceFileFormat;
    }

    /**
     * Setter for deviceFileFormat
     *
     * @param string $deviceFileFormat
     * @return $this
     */
    public function setDeviceFileFormat($deviceFileFormat)
    {
        $this->deviceFileFormat = $deviceFileFormat;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceFileFormat()
    {
        $this->deviceFileFormat = null;
        return $this;
    }

    /**
     * Getter for deviceManagementDeviceTypeOptions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeOptions22V6
     */
    public function getDeviceManagementDeviceTypeOptions()
    {
        return $this->deviceManagementDeviceTypeOptions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceManagementDeviceTypeOptions;
    }

    /**
     * Setter for deviceManagementDeviceTypeOptions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeOptions22V6 $deviceManagementDeviceTypeOptions
     * @return $this
     */
    public function setDeviceManagementDeviceTypeOptions(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeOptions22V6 $deviceManagementDeviceTypeOptions)
    {
        $this->deviceManagementDeviceTypeOptions = $deviceManagementDeviceTypeOptions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceManagementDeviceTypeOptions()
    {
        $this->deviceManagementDeviceTypeOptions = null;
        return $this;
    }
}

