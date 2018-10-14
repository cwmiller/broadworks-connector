<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingAccessDeviceGetListResponse
 *
 * Response to GroupFlexibleSeatingAccessDeviceGetListRequest
 *
 * @see GroupFlexibleSeatingAccessDeviceGetListRequest
 */
class GroupFlexibleSeatingAccessDeviceGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableAccessDevice
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListResponseAvailableAccessDevice[]
     */
    private $availableAccessDevice = array(
        
    );

    /**
     * Getter for availableAccessDevice
     *
     * @ElementName availableAccessDevice
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListResponseAvailableAccessDevice[]
     */
    public function getAvailableAccessDevice()
    {
        return $this->availableAccessDevice;
    }

    /**
     * Setter for availableAccessDevice
     *
     * @ElementName availableAccessDevice
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListResponseAvailableAccessDevice[] $availableAccessDevice
     * @return $this
     */
    public function setAvailableAccessDevice(array $availableAccessDevice)
    {
        $this->availableAccessDevice = $availableAccessDevice;
        return $this;
    }

    /**
     * Adder for availableAccessDevice
     *
     * @ElementName availableAccessDevice
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListResponseAvailableAccessDevice $availableAccessDevice
     * @return $this
     */
    public function addAvailableAccessDevice($availableAccessDevice)
    {
        $this->availableAccessDevice []= $availableAccessDevice;
        return $this;
    }


}

