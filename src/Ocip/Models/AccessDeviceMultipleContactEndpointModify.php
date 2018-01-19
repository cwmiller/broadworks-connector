<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceMultipleContactEndpointModify
 *
 * Access device end point used in the context of modify that can have more than
 * one contact defined.
 *         Only Static Registration capabable devices may have more than one
 * contact defined.
 *         Port numbers are only used by devices with static line ordering.
 */
class AccessDeviceMultipleContactEndpointModify
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
     * @ElementName contactList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList|null
     */
    private $contactList = null;

    /**
     * @ElementName portNumber
     * @var int|null
     */
    private $portNumber = null;

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
     * Getter for contactList
     *
     * @ElementName contactList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList|null
     */
    public function getContactList()
    {
        return $this->contactList;
    }

    /**
     * Setter for contactList
     *
     * @ElementName contactList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList|null $contactList
     * @return $this
     */
    public function setContactList($contactList)
    {
        $this->contactList = $contactList;
        return $this;
    }

    /**
     * Getter for portNumber
     *
     * @ElementName portNumber
     * @return int|null
     */
    public function getPortNumber()
    {
        return $this->portNumber;
    }

    /**
     * Setter for portNumber
     *
     * @ElementName portNumber
     * @param int|null $portNumber
     * @return $this
     */
    public function setPortNumber($portNumber)
    {
        $this->portNumber = $portNumber;
        return $this;
    }


}
