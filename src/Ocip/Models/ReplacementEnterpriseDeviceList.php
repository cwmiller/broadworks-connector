<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementEnterpriseDeviceList
 *
 * A list of enterprise accessible devices that replaces a previously configured
 * list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class ReplacementEnterpriseDeviceList
{

    /**
     * @ElementName device
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[]
     */
    private $device = array(
        
    );

    /**
     * Getter for device
     *
     * @ElementName device
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Setter for device
     *
     * @ElementName device
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[] $device
     * @return $this
     */
    public function setDevice(array $device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Adder for device
     *
     * @ElementName device
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice $device
     * @return $this
     */
    public function addDevice($device)
    {
        $this->device []= $device;
        return $this;
    }


}

