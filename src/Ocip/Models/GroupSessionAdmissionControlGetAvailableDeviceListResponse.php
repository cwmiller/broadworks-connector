<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupSessionAdmissionControlGetAvailableDeviceListResponse
 *
 * Response to GroupSessionAdmissionControlGetAvailableDeviceListRequest.
 *         Contains a table of devices can be assigned to session admission control group in the group.
 *
 * @see GroupSessionAdmissionControlGetAvailableDeviceListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:7730","type":"sequence"}]
 */
class GroupSessionAdmissionControlGetAvailableDeviceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:7730
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[]
     */
    protected $accessDevice = [
        
    ];

    /**
     * Getter for accessDevice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[]
     */
    public function getAccessDevice()
    {
        return $this->accessDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[] $accessDevice
     * @return $this
     */
    public function setAccessDevice(array $accessDevice)
    {
        $this->accessDevice = $accessDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDevice()
    {
        $this->accessDevice = null;
        return $this;
    }

    /**
     * Adder for accessDevice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice
     * @return $this
     */
    public function addAccessDevice($accessDevice)
    {
        $this->accessDevice[] = $accessDevice;
        return $this;
    }
}

