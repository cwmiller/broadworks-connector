<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CPEDeviceModifyOptions16sp1
 *
 * CPE device's options when used with a modify request.
 *         The following options are not changeable:
 *         configType
 *         systemFileName
 *         deviceFileFormat
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:1641","type":"sequence"}]
 */
class CPEDeviceModifyOptions16sp1
{

    /**
     * @ElementName enableMonitoring
     * @Type bool
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1641
     * @var bool|null
     */
    private $enableMonitoring = null;

    /**
     * @ElementName deviceManagementDeviceTypeOptions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeModifyOptions16
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1641
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementDeviceTypeModifyOptions16|null
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

