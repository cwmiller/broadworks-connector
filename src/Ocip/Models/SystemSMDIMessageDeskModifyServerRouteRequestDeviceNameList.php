<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMDIMessageDeskModifyServerRouteRequestDeviceNameList
 */
class SystemSMDIMessageDeskModifyServerRouteRequestDeviceNameList
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Array
     * @var string[]
     */
    private $deviceName = array(
        
    );

    /**
     * Getter for deviceName
     *
     * @return string[]
     */
    public function getDeviceName()
    {
        return $this->deviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @param string[] $deviceName
     * @return $this
     */
    public function setDeviceName(array $deviceName)
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

    /**
     * Adder for deviceName
     *
     * @param string $deviceName
     * @return $this
     */
    public function addDeviceName(string $deviceName)
    {
        $this->deviceName[] = $deviceName;
        return $this;
    }


}

