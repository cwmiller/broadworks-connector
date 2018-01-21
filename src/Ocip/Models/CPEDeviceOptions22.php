<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CPEDeviceOptions22
 *
 * CPE device's options.
 *     
 *     The field configType is optional to allow the use of field enableMonitoring
 * for all device types being managed or not
 *     ie. device configuration option equals to DeviceManagement, or Legacy, or
 * Not Supported).
 *     
 *     If the device configuration option is set to "Not Supported", the value of
 * configType is forced set to "None" regardless 
 *     of its current value.
 *     
 *     It is not allowed to add a device type with device configuration option set
 * to Device Management or Legacy when the configType
 *     is not set.
 */
class CPEDeviceOptions22
{

    /**
     * @ElementName enableMonitoring
     * @var bool|null
     */
    private $enableMonitoring = null;

    /**
     * @ElementName configType
     * @var string|null
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
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeOptions22|null
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
     * Getter for configType
     *
     * @ElementName configType
     * @return string|null
     */
    public function getConfigType()
    {
        return $this->configType;
    }

    /**
     * Setter for configType
     *
     * @ElementName configType
     * @param string|null $configType
     * @return $this
     */
    public function setConfigType($configType)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeOptions22|null
     */
    public function getDeviceManagementDeviceTypeOptions()
    {
        return $this->deviceManagementDeviceTypeOptions;
    }

    /**
     * Setter for deviceManagementDeviceTypeOptions
     *
     * @ElementName deviceManagementDeviceTypeOptions
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeOptions22|null $deviceManagementDeviceTypeOptions
     * @return $this
     */
    public function setDeviceManagementDeviceTypeOptions($deviceManagementDeviceTypeOptions)
    {
        $this->deviceManagementDeviceTypeOptions = $deviceManagementDeviceTypeOptions;
        return $this;
    }


}

