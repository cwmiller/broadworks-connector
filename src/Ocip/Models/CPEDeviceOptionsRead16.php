<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CPEDeviceOptionsRead16
 *
 * CPE device's options.
 */
class CPEDeviceOptionsRead16
{

    /**
     * @ElementName enableMonitoring
     * @var bool|null
     */
    private $enableMonitoring = null;

    /**
     * @ElementName resetEvent
     * @var \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceResetEventType|null
     */
    private $resetEvent = null;

    /**
     * @ElementName configType
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14|null
     */
    private $configType = null;

    /**
     * @ElementName systemFileName
     * @var string|null
     */
    private $systemFileName = null;

    /**
     * @ElementName deviceFileFormat
     * @var string|null
     */
    private $deviceFileFormat = null;

    /**
     * @ElementName deviceManagementDeviceTypeOptions
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeOptionsRead16|null
     */
    private $deviceManagementDeviceTypeOptions = null;

    /**
     * Getter for enableMonitoring
     *
     * @ElementName enableMonitoring
     * @return bool|null
     */
    public function getEnableMonitoring()
    {
        return $this->enableMonitoring;
    }

    /**
     * Setter for enableMonitoring
     *
     * @ElementName enableMonitoring
     * @param bool|null $enableMonitoring
     * @return $this
     */
    public function setEnableMonitoring($enableMonitoring)
    {
        $this->enableMonitoring = $enableMonitoring;
        return $this;
    }

    /**
     * Getter for resetEvent
     *
     * @ElementName resetEvent
     * @return \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceResetEventType|null
     */
    public function getResetEvent()
    {
        return $this->resetEvent;
    }

    /**
     * Setter for resetEvent
     *
     * @ElementName resetEvent
     * @param \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceResetEventType|null $resetEvent
     * @return $this
     */
    public function setResetEvent(\CWM\BroadWorksConnector\Ocip\Models\CPEDeviceResetEventType $resetEvent)
    {
        $this->resetEvent = $resetEvent;
        return $this;
    }

    /**
     * Getter for configType
     *
     * @ElementName configType
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14|null
     */
    public function getConfigType()
    {
        return $this->configType;
    }

    /**
     * Setter for configType
     *
     * @ElementName configType
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14|null $configType
     * @return $this
     */
    public function setConfigType(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14 $configType)
    {
        $this->configType = $configType;
        return $this;
    }

    /**
     * Getter for systemFileName
     *
     * @ElementName systemFileName
     * @return string|null
     */
    public function getSystemFileName()
    {
        return $this->systemFileName;
    }

    /**
     * Setter for systemFileName
     *
     * @ElementName systemFileName
     * @param string|null $systemFileName
     * @return $this
     */
    public function setSystemFileName($systemFileName)
    {
        $this->systemFileName = $systemFileName;
        return $this;
    }

    /**
     * Getter for deviceFileFormat
     *
     * @ElementName deviceFileFormat
     * @return string|null
     */
    public function getDeviceFileFormat()
    {
        return $this->deviceFileFormat;
    }

    /**
     * Setter for deviceFileFormat
     *
     * @ElementName deviceFileFormat
     * @param string|null $deviceFileFormat
     * @return $this
     */
    public function setDeviceFileFormat($deviceFileFormat)
    {
        $this->deviceFileFormat = $deviceFileFormat;
        return $this;
    }

    /**
     * Getter for deviceManagementDeviceTypeOptions
     *
     * @ElementName deviceManagementDeviceTypeOptions
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeOptionsRead16|null
     */
    public function getDeviceManagementDeviceTypeOptions()
    {
        return $this->deviceManagementDeviceTypeOptions;
    }

    /**
     * Setter for deviceManagementDeviceTypeOptions
     *
     * @ElementName deviceManagementDeviceTypeOptions
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeOptionsRead16|null $deviceManagementDeviceTypeOptions
     * @return $this
     */
    public function setDeviceManagementDeviceTypeOptions(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeOptionsRead16 $deviceManagementDeviceTypeOptions)
    {
        $this->deviceManagementDeviceTypeOptions = $deviceManagementDeviceTypeOptions;
        return $this;
    }


}

