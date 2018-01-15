<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingAccessDeviceGetListResponse
 *
 * Response to GroupFlexibleSeatingAccessDeviceGetListRequest
 */
class GroupFlexibleSeatingAccessDeviceGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableAccessDevice
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListResponse\AvailableAccessDevice[]
     */
    private $availableAccessDevice = array(
        
    );

    /**
     * Getter for availableAccessDevice
     *
     * @ElementName availableAccessDevice
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListResponse\AvailableAccessDevice[]
     */
    public function getAvailableAccessDevice()
    {
        return $this->availableAccessDevice;
    }

    /**
     * Setter for availableAccessDevice
     *
     * @ElementName availableAccessDevice
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListResponse\AvailableAccessDevice[] $availableAccessDevice
     * @return $this
     */
    public function setAvailableAccessDevice($availableAccessDevice)
    {
        $this->availableAccessDevice = $availableAccessDevice;
        return $this;
    }

    /**
     * Adder for availableAccessDevice
     *
     * @ElementName availableAccessDevice
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupFlexibleSeatingAccessDeviceGetListResponse\AvailableAccessDevice $availableAccessDevice
     * @return $this
     */
    public function addAvailableAccessDevice($availableAccessDevice)
    {
        $this->availableAccessDevice []= $availableAccessDevice;
        return $this;
    }


}

