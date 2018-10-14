<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CPEDeviceModifyOptions16sp1
 *
 * CPE device's options when used with a modify request.
 *         The following options are not changeable:
 *           configType
 *           systemFileName
 *           deviceFileFormat
 */
class CPEDeviceModifyOptions16sp1
{

    /**
     * @ElementName enableMonitoring
     * @var bool|null
     */
    private $enableMonitoring = null;

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
    public function setDeviceManagementDeviceTypeOptions(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeModifyOptions16 $deviceManagementDeviceTypeOptions)
    {
        $this->deviceManagementDeviceTypeOptions = $deviceManagementDeviceTypeOptions;
        return $this;
    }


}

