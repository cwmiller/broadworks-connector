<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceEndpointKey
 *
 * Access device end point in the context of a modify or delete command.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:108","type":"sequence"}]
 */
class AccessDeviceEndpointKey
{
    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Group 6337d0cfba4de1c83587203c5b0bae54:108
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    protected $accessDevice = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:108
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $linePort = null;

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
}

