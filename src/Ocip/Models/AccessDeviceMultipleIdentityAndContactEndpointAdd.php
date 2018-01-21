<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceMultipleIdentityAndContactEndpointAdd
 *
 * Access device end point used in the context of add that can have more than one
 * contact defined.
 *           The endpoint is identified by its linePort (public Identity) and
 * possibly a private Identity.
 *           Only Static Registration capabable devices may have more than one
 * contact defined.
 *           Port numbers are only used by devices with static line ordering.
 *           The following elements are only used in XS data mode and ignored in AS
 * data mode:
 *             privateIdentity
 */
class AccessDeviceMultipleIdentityAndContactEndpointAdd
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
     * @ElementName contact
     * @var string[]
     */
    private $contact = array(
        
    );

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
     * Getter for contact
     *
     * @ElementName contact
     * @return string[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Setter for contact
     *
     * @ElementName contact
     * @param string[] $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Adder for contact
     *
     * @ElementName contact
     * @param string $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact []= $contact;
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

