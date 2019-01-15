<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceMultipleContactEndpointModify
 *
 * Access device end point used in the context of modify that can have more than one contact defined.
 *         Only Static Registration capable devices may have more than one contact defined.
 *         Port numbers are only used by devices with static line ordering.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:171","type":"sequence"}]
 */
class AccessDeviceMultipleContactEndpointModify
{

    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:171
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    private $accessDevice = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:171
     * @var string|null
     */
    private $linePort = null;

    /**
     * @ElementName contactList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:171
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $contactList = null;

    /**
     * @ElementName portNumber
     * @Type int
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:171
     * @var int|null
     */
    private $portNumber = null;

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
     * Getter for contactList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList|null
     */
    public function getContactList()
    {
        return $this->contactList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contactList;
    }

    /**
     * Setter for contactList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList|null $contactList
     * @return $this
     */
    public function setContactList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList $contactList = null)
    {
        if ($contactList === null) {
            $this->contactList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->contactList = $contactList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContactList()
    {
        $this->contactList = null;
        return $this;
    }

    /**
     * Getter for portNumber
     *
     * @return int
     */
    public function getPortNumber()
    {
        return $this->portNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->portNumber;
    }

    /**
     * Setter for portNumber
     *
     * @param int $portNumber
     * @return $this
     */
    public function setPortNumber($portNumber)
    {
        $this->portNumber = $portNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPortNumber()
    {
        $this->portNumber = null;
        return $this;
    }


}

