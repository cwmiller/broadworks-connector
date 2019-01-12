<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetAvailableDetailListResponse19
 *
 * Response to GroupAccessDeviceGetAvailableDetailListRequest19.
 *
 * @see GroupAccessDeviceGetAvailableDetailListRequest19
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:575","type":"sequence"}]
 */
class GroupAccessDeviceGetAvailableDetailListResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableAccessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetAvailableDetailListResponse19AvailableAccessDevice
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:575
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetAvailableDetailListResponse19AvailableAccessDevice[]
     */
    private $availableAccessDevice = array(
        
    );

    /**
     * Getter for availableAccessDevice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetAvailableDetailListResponse19AvailableAccessDevice[]
     */
    public function getAvailableAccessDevice()
    {
        return $this->availableAccessDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->availableAccessDevice;
    }

    /**
     * Setter for availableAccessDevice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetAvailableDetailListResponse19AvailableAccessDevice[] $availableAccessDevice
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAccessDeviceGetAvailableDetailListResponse19AvailableAccessDevice $availableAccessDevice
     * @return $this
     */
    public function addAvailableAccessDevice($availableAccessDevice)
    {
        $this->availableAccessDevice[] = $availableAccessDevice;
        return $this;
    }


}

