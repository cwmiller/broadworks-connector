<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementDeviceList
 *
 * A list of devices that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4420","type":"sequence"}]
 */
class ReplacementDeviceList
{
    /**
     * @ElementName device
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4420
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[]
     */
    protected $device = [
        
    ];

    /**
     * Getter for device
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[]
     */
    public function getDevice()
    {
        return $this->device instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->device;
    }

    /**
     * Setter for device
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[] $device
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice $device
     * @return $this
     */
    public function addDevice($device)
    {
        $this->device[] = $device;
        return $this;
    }
}

