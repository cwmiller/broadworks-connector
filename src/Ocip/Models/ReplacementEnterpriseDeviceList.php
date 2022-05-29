<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementEnterpriseDeviceList
 *
 * A list of enterprise accessible devices that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"5395c7df0157d44aa22f3351d1a5f3da:1667","type":"sequence"}]
 */
class ReplacementEnterpriseDeviceList
{

    /**
     * @ElementName device
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice
     * @Array
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1667
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[]
     */
    protected $device = array(
        
    );

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

