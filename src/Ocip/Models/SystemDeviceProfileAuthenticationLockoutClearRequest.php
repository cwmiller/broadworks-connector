<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceProfileAuthenticationLockoutClearRequest
 *
 * Request to clear device profile authentication lockouts in the system.
 *          The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:8638","type":"sequence"}]
 */
class SystemDeviceProfileAuthenticationLockoutClearRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:8638
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey[]
     */
    protected $accessDevice = [
        
    ];

    /**
     * Getter for accessDevice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey[]
     */
    public function getAccessDevice()
    {
        return $this->accessDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey[] $accessDevice
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceKey $accessDevice
     * @return $this
     */
    public function addAccessDevice($accessDevice)
    {
        $this->accessDevice[] = $accessDevice;
        return $this;
    }
}

