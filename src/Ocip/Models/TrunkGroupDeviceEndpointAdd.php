<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupDeviceEndpointAdd
 *
 * Trunk group device endpoint used in the context of modify.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:3753","type":"sequence"}]
 */
class TrunkGroupDeviceEndpointAdd
{

    /**
     * @ElementName name
     * @Type string
     * @Group 18b369af88e42ffdb4166615c670ce2c:3753
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group 18b369af88e42ffdb4166615c670ce2c:3753
     * @var string|null
     */
    private $linePort = null;

    /**
     * @ElementName contact
     * @Type string
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:3753
     * @var string|null
     */
    private $contact = null;

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
     * Getter for contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contact;
    }

    /**
     * Setter for contact
     *
     * @param string $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContact()
    {
        $this->contact = null;
        return $this;
    }


}

