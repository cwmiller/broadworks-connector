<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CPEDeviceModifyOptions16
 *
 * CPE device's options when used with a modify request.
 *         The following options are not changeable:
 *           configType
 *           systemFileName
 *           deviceFileFormat
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:48725","type":"sequence"}]
 */
class CPEDeviceModifyOptions16
{
    /**
     * @ElementName enableMonitoring
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:48725
     * @var bool|null
     */
    protected $enableMonitoring = null;

    /**
     * @ElementName resetEvent
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceResetEventType
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:48725
     * @var \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceResetEventType|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $resetEvent = null;

    /**
     * @ElementName deviceManagementDeviceTypeOptions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeModifyOptions16
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:48725
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeModifyOptions16|null
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
     * Getter for resetEvent
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceResetEventType|null
     */
    public function getResetEvent()
    {
        return $this->resetEvent instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resetEvent;
    }

    /**
     * Setter for resetEvent
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceResetEventType|null $resetEvent
     * @return $this
     */
    public function setResetEvent(\CWM\BroadWorksConnector\Ocip\Models\CPEDeviceResetEventType $resetEvent = null)
    {
        if ($resetEvent === null) {
            $this->resetEvent = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->resetEvent = $resetEvent;
        }
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
     * Getter for deviceManagementDeviceTypeOptions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeModifyOptions16
     */
    public function getDeviceManagementDeviceTypeOptions()
    {
        return $this->deviceManagementDeviceTypeOptions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceManagementDeviceTypeOptions;
    }

    /**
     * Setter for deviceManagementDeviceTypeOptions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeModifyOptions16 $deviceManagementDeviceTypeOptions
     * @return $this
     */
    public function setDeviceManagementDeviceTypeOptions(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeModifyOptions16 $deviceManagementDeviceTypeOptions)
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

