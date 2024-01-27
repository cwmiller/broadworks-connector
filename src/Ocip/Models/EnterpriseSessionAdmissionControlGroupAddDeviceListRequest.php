<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseSessionAdmissionControlGroupAddDeviceListRequest
 *
 * Request to add one or more devices to an enterprise level session admission control group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:577","type":"sequence"}]
 */
class EnterpriseSessionAdmissionControlGroupAddDeviceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 405ec18fe08719ecf74e749d7e18c88f:577
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group 405ec18fe08719ecf74e749d7e18c88f:577
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName devices
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice
     * @Array
     * @Group 405ec18fe08719ecf74e749d7e18c88f:577
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[]
     */
    protected $devices = [
        
    ];

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for devices
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[]
     */
    public function getDevices()
    {
        return $this->devices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->devices;
    }

    /**
     * Setter for devices
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[] $devices
     * @return $this
     */
    public function setDevices(array $devices)
    {
        $this->devices = $devices;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDevices()
    {
        $this->devices = null;
        return $this;
    }

    /**
     * Adder for devices
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice $devices
     * @return $this
     */
    public function addDevices($devices)
    {
        $this->devices[] = $devices;
        return $this;
    }
}

