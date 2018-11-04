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
 */
class CPEDeviceModifyOptions16
{

    /**
     * @ElementName enableMonitoring
     * @var bool|null
     */
    private $enableMonitoring = null;

    /**
     * @ElementName resetEvent
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $resetEvent = null;

    /**
     * @ElementName deviceManagementDeviceTypeOptions
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeModifyOptions16|null
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getResetEvent()
    {
        return $this->resetEvent;
    }

    /**
     * Setter for resetEvent
     *
     * @ElementName resetEvent
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $resetEvent
     * @return $this
     */
    public function setResetEvent($resetEvent)
    {
        $this->resetEvent = $resetEvent;
        return $this;
    }

    /**
     * Getter for deviceManagementDeviceTypeOptions
     *
     * @ElementName deviceManagementDeviceTypeOptions
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeModifyOptions16|null
     */
    public function getDeviceManagementDeviceTypeOptions()
    {
        return $this->deviceManagementDeviceTypeOptions;
    }

    /**
     * Setter for deviceManagementDeviceTypeOptions
     *
     * @ElementName deviceManagementDeviceTypeOptions
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeModifyOptions16|null $deviceManagementDeviceTypeOptions
     * @return $this
     */
    public function setDeviceManagementDeviceTypeOptions($deviceManagementDeviceTypeOptions)
    {
        $this->deviceManagementDeviceTypeOptions = $deviceManagementDeviceTypeOptions;
        return $this;
    }


}

