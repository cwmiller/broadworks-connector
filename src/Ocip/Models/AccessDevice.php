<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDevice
 *
 * Uniquely identifies an Identity/device profile created anywhere in the system.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:27","type":"sequence"}]
 */
class AccessDevice
{

    /**
     * @ElementName deviceLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel
     * @Group c0d21ef9ba207c335d8347e5172fce1d:27
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel|null
     */
    protected $deviceLevel = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:27
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * Getter for deviceLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel
     */
    public function getDeviceLevel()
    {
        return $this->deviceLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceLevel;
    }

    /**
     * Setter for deviceLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel $deviceLevel
     * @return $this
     */
    public function setDeviceLevel(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel $deviceLevel)
    {
        $this->deviceLevel = $deviceLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceLevel()
    {
        $this->deviceLevel = null;
        return $this;
    }

    /**
     * Getter for deviceName
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @param string $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceName()
    {
        $this->deviceName = null;
        return $this;
    }


}

