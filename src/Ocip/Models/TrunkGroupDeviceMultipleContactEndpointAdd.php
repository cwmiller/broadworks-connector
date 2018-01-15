<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupDeviceMultipleContactEndpointAdd
 *
 * Trunk group device endpoint used in the context of modify that can have multiple
 * contacts.
 */
class TrunkGroupDeviceMultipleContactEndpointAdd
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName linePort
     * @var string|null
     */
    private $linePort = null;

    /**
     * @ElementName contact
     * @var string[]
     */
    private $contact = array(
        
    );

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
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


}

