<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse
 *
 * Response to EnterpriseSessionAdmissionControlGetAvailableDeviceListRequest.
 *         Contains a table of devices can be assigned to session admission control group in the enterprise.
 *
 * @see EnterpriseSessionAdmissionControlGetAvailableDeviceListRequest
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:561","type":"sequence"}]
 */
class EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice
     * @Array
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:561
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[]
     */
    protected $accessDevice = [
        
    ];

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

