<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CPEDeviceOptionsRead
 *
 * CPE device's options.
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:47940","type":"sequence"}]
 */
class CPEDeviceOptionsRead
{

    /**
     * @ElementName enableMonitoring
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47940
     * @var bool|null
     */
    private $enableMonitoring = null;

    /**
     * @ElementName resetEvent
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceResetEventType
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47940
     * @var \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceResetEventType|null
     */
    private $resetEvent = null;

    /**
     * @ElementName configType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47940
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14|null
     */
    private $configType = null;

    /**
     * @ElementName systemFileName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47940
     * @MinLength 1
     * @MaxLength 265
     * @var string|null
     */
    private $systemFileName = null;

    /**
     * @ElementName deviceFileFormat
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47940
     * @MinLength 1
     * @MaxLength 265
     * @var string|null
     */
    private $deviceFileFormat = null;

    /**
     * @ElementName deviceManagementDeviceTypeOptions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeOptionsRead
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:47940
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeOptionsRead|null
     */
    private $deviceManagementDeviceTypeOptions = null;

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
     * Getter for resetEvent
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceResetEventType
     */
    public function getResetEvent()
    {
        return $this->resetEvent instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resetEvent;
    }

    /**
     * Setter for resetEvent
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceResetEventType $resetEvent
     * @return $this
     */
    public function setResetEvent(\CWM\BroadWorksConnector\Ocip\Models\CPEDeviceResetEventType $resetEvent)
    {
        $this->resetEvent = $resetEvent;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResetEvent()
    {
        $this->resetEvent = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeOptionsRead
     */
    public function getDeviceManagementDeviceTypeOptions()
    {
        return $this->deviceManagementDeviceTypeOptions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceManagementDeviceTypeOptions;
    }

    /**
     * Setter for deviceManagementDeviceTypeOptions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeOptionsRead $deviceManagementDeviceTypeOptions
     * @return $this
     */
    public function setDeviceManagementDeviceTypeOptions(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeOptionsRead $deviceManagementDeviceTypeOptions)
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

