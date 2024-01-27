<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementEnterpriseDeviceList
 *
 * A list of enterprise accessible devices that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:1327","type":"sequence"}]
 */
class ReplacementEnterpriseDeviceList
{
    /**
     * @ElementName device
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice
     * @Array
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1327
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[]
     */
    protected $device = [
        
    ];

    /**
     * Getter for device
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[]
     */
    public function getDevice()
    {
        return $this->device instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->device;
    }

    /**
     * Setter for device
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[] $device
     * @return $this
     */
    public function setDevice(array $device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDevice()
    {
        $this->device = null;
        return $this;
    }

    /**
     * Adder for device
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice $device
     * @return $this
     */
    public function addDevice($device)
    {
        $this->device[] = $device;
        return $this;
    }
}

