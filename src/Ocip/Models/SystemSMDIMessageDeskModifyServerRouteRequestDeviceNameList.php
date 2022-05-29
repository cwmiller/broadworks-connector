<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMDIMessageDeskModifyServerRouteRequestDeviceNameList
 *
 * @Groups [{"id":"ee7bb69368e23a56a82c5d9cf07b5433:205","type":"sequence"}]
 */
class SystemSMDIMessageDeskModifyServerRouteRequestDeviceNameList
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Array
     * @Group ee7bb69368e23a56a82c5d9cf07b5433:205
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $deviceName = array(
        
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

