<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CPEDeviceOptions
 *
 * CPE device's options.
 *         Replaced by: CPEDeviceOptions14sp6
 */
class CPEDeviceOptions
{

    /**
     * @ElementName enableMonitoring
     * @var bool|null
     */
    private $enableMonitoring = null;

    /**
     * @ElementName resetEvent
     * @var string|null
     */
    private $resetEvent = null;

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
     * @return string|null
     */
    public function getResetEvent()
    {
        return $this->resetEvent;
    }

    /**
     * Setter for resetEvent
     *
     * @ElementName resetEvent
     * @param string|null $resetEvent
     * @return $this
     */
    public function setResetEvent($resetEvent)
    {
        $this->resetEvent = $resetEvent;
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


}

