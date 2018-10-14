<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMDIMessageDeskModifyServerRouteRequestDeviceNameList
 */
class SystemSMDIMessageDeskModifyServerRouteRequestDeviceNameList
{

    /**
     * @ElementName deviceName
     * @var string[]
     */
    private $deviceName = array(
        
    );

    /**
     * Getter for deviceName
     *
     * @ElementName deviceName
     * @return string[]
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @ElementName deviceName
     * @param string[] $deviceName
     * @return $this
     */
    public function setDeviceName(array $deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * Adder for deviceName
     *
     * @ElementName deviceName
     * @param string $deviceName
     * @return $this
     */
    public function addDeviceName(string $deviceName)
    {
        $this->deviceName []= $deviceName;
        return $this;
    }


}

