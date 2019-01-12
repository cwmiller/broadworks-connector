<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse
 *
 * Response to EnterpriseSessionAdmissionControlGetAvailableDeviceListRequest.
 *         Contains a table of devices can be assigned to session admission control group in the enterprise.
 *
 * @see EnterpriseSessionAdmissionControlGetAvailableDeviceListRequest
 * @Groups [{"id":"5395c7df0157d44aa22f3351d1a5f3da:901","type":"sequence"}]
 */
class EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice
     * @Array
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:901
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[]
     */
    private $accessDevice = array(
        
    );

    /**
     * Getter for accessDevice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[]
     */
    public function getAccessDevice()
    {
        return $this->accessDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[] $accessDevice
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice $accessDevice
     * @return $this
     */
    public function addAccessDevice($accessDevice)
    {
        $this->accessDevice[] = $accessDevice;
        return $this;
    }


}

