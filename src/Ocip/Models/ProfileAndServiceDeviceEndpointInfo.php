<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceDeviceEndpointInfo
 *
 * Represents information about an endpoint device
 */
class ProfileAndServiceDeviceEndpointInfo
{

    /**
     * @ElementName accessDevice
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    private $accessDevice = null;

    /**
     * @ElementName linePort
     * @var string|null
     */
    private $linePort = null;

    /**
     * @ElementName privateIdentity
     * @var string|null
     */
    private $privateIdentity = null;

    /**
     * @ElementName accessDeviceMacAddress
     * @var string|null
     */
    private $accessDeviceMacAddress = null;

    /**
     * Getter for accessDevice
     *
     * @ElementName accessDevice
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    public function getAccessDevice()
    {
        return $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @ElementName accessDevice
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null $accessDevice
     * @return $this
     */
    public function setAccessDevice($accessDevice)
    {
        $this->accessDevice = $accessDevice;
        return $this;
    }

    /**
     * Getter for linePort
     *
     * @ElementName linePort
     * @return string|null
     */
    public function getLinePort()
    {
        return $this->linePort;
    }

    /**
     * Setter for linePort
     *
     * @ElementName linePort
     * @param string|null $linePort
     * @return $this
     */
    public function setLinePort($linePort)
    {
        $this->linePort = $linePort;
        return $this;
    }

    /**
     * Getter for privateIdentity
     *
     * @ElementName privateIdentity
     * @return string|null
     */
    public function getPrivateIdentity()
    {
        return $this->privateIdentity;
    }

    /**
     * Setter for privateIdentity
     *
     * @ElementName privateIdentity
     * @param string|null $privateIdentity
     * @return $this
     */
    public function setPrivateIdentity($privateIdentity)
    {
        $this->privateIdentity = $privateIdentity;
        return $this;
    }

    /**
     * Getter for accessDeviceMacAddress
     *
     * @ElementName accessDeviceMacAddress
     * @return string|null
     */
    public function getAccessDeviceMacAddress()
    {
        return $this->accessDeviceMacAddress;
    }

    /**
     * Setter for accessDeviceMacAddress
     *
     * @ElementName accessDeviceMacAddress
     * @param string|null $accessDeviceMacAddress
     * @return $this
     */
    public function setAccessDeviceMacAddress($accessDeviceMacAddress)
    {
        $this->accessDeviceMacAddress = $accessDeviceMacAddress;
        return $this;
    }


}

