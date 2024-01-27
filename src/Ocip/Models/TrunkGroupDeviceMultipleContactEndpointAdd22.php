<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupDeviceMultipleContactEndpointAdd22
 *
 * Trunk group device endpoint used in the context of modify that can have multiple contacts.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5488","type":"sequence"}]
 */
class TrunkGroupDeviceMultipleContactEndpointAdd22
{
    /**
     * @ElementName name
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5488
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5488
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $linePort = null;

    /**
     * @ElementName contact
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SIPContactInfo
     * @Array
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5488
     * @var \CWM\BroadWorksConnector\Ocip\Models\SIPContactInfo[]
     */
    protected $contact = [
        
    ];

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SIPContactInfo[]
     */
    public function getContact()
    {
        return $this->contact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contact;
    }

    /**
     * Setter for contact
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SIPContactInfo[] $contact
     * @return $this
     */
    public function setContact(array $contact)
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

    /**
     * Adder for contact
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SIPContactInfo $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }
}

