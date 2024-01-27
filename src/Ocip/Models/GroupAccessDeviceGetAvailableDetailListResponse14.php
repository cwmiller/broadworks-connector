<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetAvailableDetailListResponse14
 *
 * Response to GroupAccessDeviceGetAvailableDetailListRequest14.
 *
 * @see GroupAccessDeviceGetAvailableDetailListRequest14
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:3105","type":"sequence"}]
 */
class GroupAccessDeviceGetAvailableDetailListResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName availableAccessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetAvailableDetailListResponse14AvailableAccessDevice
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:3105
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetAvailableDetailListResponse14AvailableAccessDevice[]
     */
    protected $availableAccessDevice = [
        
    ];

    /**
     * Getter for availableAccessDevice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetAvailableDetailListResponse14AvailableAccessDevice[]
     */
    public function getAvailableAccessDevice()
    {
        return $this->availableAccessDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->availableAccessDevice;
    }

    /**
     * Setter for availableAccessDevice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetAvailableDetailListResponse14AvailableAccessDevice[] $availableAccessDevice
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetAvailableDetailListResponse14AvailableAccessDevice $availableAccessDevice
     * @return $this
     */
    public function addAvailableAccessDevice($availableAccessDevice)
    {
        $this->availableAccessDevice[] = $availableAccessDevice;
        return $this;
    }
}

