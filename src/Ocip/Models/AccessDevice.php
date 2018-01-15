<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDevice
 *
 * Uniquely identifies an Identity/device profile created anywhere in the system.
 */
class AccessDevice
{

    /**
     * @ElementName deviceLevel
     * @var string|null
     */
    private $deviceLevel = null;

    /**
     * @ElementName deviceName
     * @var string|null
     */
    private $deviceName = null;

    /**
     * Getter for deviceLevel
     *
     * @ElementName deviceLevel
     * @return string|null
     */
    public function getDeviceLevel()
    {
        return $this->deviceLevel;
    }

    /**
     * Setter for deviceLevel
     *
     * @ElementName deviceLevel
     * @param string|null $deviceLevel
     * @return $this
     */
    public function setDeviceLevel($deviceLevel)
    {
        $this->deviceLevel = $deviceLevel;
        return $this;
    }

    /**
     * Getter for deviceName
     *
     * @ElementName deviceName
     * @return string|null
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @ElementName deviceName
     * @param string|null $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }


}

