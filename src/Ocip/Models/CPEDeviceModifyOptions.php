<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CPEDeviceModifyOptions
 *
 * CPE device's options when used with a modify request.
 *         The following options are not changeable:
 *           configType
 *           systemFileName
 *           deviceFileFormat
 */
class CPEDeviceModifyOptions
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
     * @ElementName deviceManagementDeviceTypeOptions
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeModifyOptions|null
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
     * Getter for deviceManagementDeviceTypeOptions
     *
     * @ElementName deviceManagementDeviceTypeOptions
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeModifyOptions|null
     */
    public function getDeviceManagementDeviceTypeOptions()
    {
        return $this->deviceManagementDeviceTypeOptions;
    }

    /**
     * Setter for deviceManagementDeviceTypeOptions
     *
     * @ElementName deviceManagementDeviceTypeOptions
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeModifyOptions|null $deviceManagementDeviceTypeOptions
     * @return $this
     */
    public function setDeviceManagementDeviceTypeOptions(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeModifyOptions $deviceManagementDeviceTypeOptions)
    {
        $this->deviceManagementDeviceTypeOptions = $deviceManagementDeviceTypeOptions;
        return $this;
    }


}

