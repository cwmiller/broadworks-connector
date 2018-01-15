<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupSessionAdmissionControlGetAvailableDeviceListResponse
 *
 * Response to GroupSessionAdmissionControlGetAvailableDeviceListRequest.
 *         Contains a table of devices can be assigned to session admission control
 * group in the group.
 */
class GroupSessionAdmissionControlGetAvailableDeviceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName accessDevice
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[]
     */
    private $accessDevice = array(
        
    );

    /**
     * Getter for accessDevice
     *
     * @ElementName accessDevice
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[]
     */
    public function getAccessDevice()
    {
        return $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @ElementName accessDevice
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[] $accessDevice
     * @return $this
     */
    public function setAccessDevice($accessDevice)
    {
        $this->accessDevice = $accessDevice;
        return $this;
    }

    /**
     * Adder for accessDevice
     *
     * @ElementName accessDevice
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice
     * @return $this
     */
    public function addAccessDevice($accessDevice)
    {
        $this->accessDevice []= $accessDevice;
        return $this;
    }


}

