<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetAvailableDetailListResponse19
 *
 * Response to GroupAccessDeviceGetAvailableDetailListRequest19.
 */
class GroupAccessDeviceGetAvailableDetailListResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableAccessDevice
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetAvailableDetailListResponse19\AvailableAccessDevice[]
     */
    private $availableAccessDevice = array(
        
    );

    /**
     * Getter for availableAccessDevice
     *
     * @ElementName availableAccessDevice
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetAvailableDetailListResponse19\AvailableAccessDevice[]
     */
    public function getAvailableAccessDevice()
    {
        return $this->availableAccessDevice;
    }

    /**
     * Setter for availableAccessDevice
     *
     * @ElementName availableAccessDevice
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetAvailableDetailListResponse19\AvailableAccessDevice[] $availableAccessDevice
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetAvailableDetailListResponse19\AvailableAccessDevice $availableAccessDevice
     * @return $this
     */
    public function addAvailableAccessDevice($availableAccessDevice)
    {
        $this->availableAccessDevice []= $availableAccessDevice;
        return $this;
    }


}

