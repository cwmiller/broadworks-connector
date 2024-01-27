<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingAccessDeviceGetListResponse
 *
 * Response to GroupFlexibleSeatingAccessDeviceGetListRequest
 *
 * @see GroupFlexibleSeatingAccessDeviceGetListRequest
 * @Groups [{"id":"1d4e390f8cd01ca6f92589024d74dac6:75","type":"sequence"}]
 */
class GroupFlexibleSeatingAccessDeviceGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName availableAccessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListResponseAvailableAccessDevice
     * @Array
     * @Optional
     * @Group 1d4e390f8cd01ca6f92589024d74dac6:75
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListResponseAvailableAccessDevice[]
     */
    protected $availableAccessDevice = [
        
    ];

    /**
     * Getter for availableAccessDevice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListResponseAvailableAccessDevice[]
     */
    public function getAvailableAccessDevice()
    {
        return $this->availableAccessDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->availableAccessDevice;
    }

    /**
     * Setter for availableAccessDevice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListResponseAvailableAccessDevice[] $availableAccessDevice
     * @return $this
     */
    public function setAvailableAccessDevice(array $availableAccessDevice)
    {
        $this->availableAccessDevice = $availableAccessDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvailableAccessDevice()
    {
        $this->availableAccessDevice = null;
        return $this;
    }

    /**
     * Adder for availableAccessDevice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListResponseAvailableAccessDevice $availableAccessDevice
     * @return $this
     */
    public function addAvailableAccessDevice($availableAccessDevice)
    {
        $this->availableAccessDevice[] = $availableAccessDevice;
        return $this;
    }
}

