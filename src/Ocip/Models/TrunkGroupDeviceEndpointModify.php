<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupDeviceEndpointModify
 *
 * Trunk group device endpoint used in the context of modify.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5446","type":"sequence"}]
 */
class TrunkGroupDeviceEndpointModify
{
    /**
     * @ElementName name
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5446
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5446
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $linePort = null;

    /**
     * @ElementName contact
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5446
     * @MinLength 1
     * @MaxLength 1020
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $contact = null;

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
     * @return string|null
     */
    public function getContact()
    {
        return $this->contact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contact;
    }

    /**
     * Setter for contact
     *
     * @param string|null $contact
     * @return $this
     */
    public function setContact($contact = null)
    {
        if ($contact === null) {
            $this->contact = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->contact = $contact;
        }
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

