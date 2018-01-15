<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementDeviceList
 *
 * A list of devices that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class ReplacementDeviceList
{

    /**
     * @ElementName device
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[]
     */
    private $device = array(
        
    );

    /**
     * Getter for device
     *
     * @ElementName device
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Setter for device
     *
     * @ElementName device
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[] $device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Adder for device
     *
     * @ElementName device
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice $device
     * @return $this
     */
    public function addDevice($device)
    {
        $this->device []= $device;
        return $this;
    }


}

