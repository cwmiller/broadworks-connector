<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceDeviceEndpointInfo
 *
 * Represents information about an endpoint device
 *
 * @Groups [{"id":"ee3830ce42f01a3ef2a105d473fc3b17:3613","type":"sequence"}]
 */
class ProfileAndServiceDeviceEndpointInfo
{

    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:3613
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    private $accessDevice = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:3613
     * @var string|null
     */
    private $linePort = null;

    /**
     * @ElementName privateIdentity
     * @Type string
     * @Optional
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:3613
     * @var string|null
     */
    private $privateIdentity = null;

    /**
     * @ElementName accessDeviceMacAddress
     * @Type string
     * @Optional
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:3613
     * @var string|null
     */
    private $accessDeviceMacAddress = null;

    /**
     * Getter for accessDevice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     */
    public function getAccessDevice()
    {
        return $this->accessDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice
     * @return $this
     */
    public function setAccessDevice(\CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice)
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
     * Getter for linePort
     *
     * @return string
     */
    public function getLinePort()
    {
        return $this->linePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->linePort;
    }

    /**
     * Setter for linePort
     *
     * @param string $linePort
     * @return $this
     */
    public function setLinePort($linePort)
    {
        $this->linePort = $linePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLinePort()
    {
        $this->linePort = null;
        return $this;
    }

    /**
     * Getter for privateIdentity
     *
     * @return string
     */
    public function getPrivateIdentity()
    {
        return $this->privateIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->privateIdentity;
    }

    /**
     * Setter for privateIdentity
     *
     * @param string $privateIdentity
     * @return $this
     */
    public function setPrivateIdentity($privateIdentity)
    {
        $this->privateIdentity = $privateIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrivateIdentity()
    {
        $this->privateIdentity = null;
        return $this;
    }

    /**
     * Getter for accessDeviceMacAddress
     *
     * @return string
     */
    public function getAccessDeviceMacAddress()
    {
        return $this->accessDeviceMacAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceMacAddress;
    }

    /**
     * Setter for accessDeviceMacAddress
     *
     * @param string $accessDeviceMacAddress
     * @return $this
     */
    public function setAccessDeviceMacAddress($accessDeviceMacAddress)
    {
        $this->accessDeviceMacAddress = $accessDeviceMacAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceMacAddress()
    {
        $this->accessDeviceMacAddress = null;
        return $this;
    }


}

