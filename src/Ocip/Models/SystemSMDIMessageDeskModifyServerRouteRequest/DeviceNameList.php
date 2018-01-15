<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemSMDIMessageDeskModifyServerRouteRequest;

/**
 * DeviceNameList
 */
class DeviceNameList
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
    public function setDeviceName($deviceName)
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
    public function addDeviceName($deviceName)
    {
        $this->deviceName []= $deviceName;
        return $this;
    }


}

