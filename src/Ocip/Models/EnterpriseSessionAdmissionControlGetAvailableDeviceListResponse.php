<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse
 *
 * Response to EnterpriseSessionAdmissionControlGetAvailableDeviceListRequest.
 *         Contains a table of devices can be assigned to session admission control
 * group in the enterprise.
 */
class EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName accessDevice
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[]
     */
    private $accessDevice = array(
        
    );

    /**
     * Getter for accessDevice
     *
     * @ElementName accessDevice
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[]
     */
    public function getAccessDevice()
    {
        return $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @ElementName accessDevice
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[] $accessDevice
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice $accessDevice
     * @return $this
     */
    public function addAccessDevice($accessDevice)
    {
        $this->accessDevice []= $accessDevice;
        return $this;
    }


}

