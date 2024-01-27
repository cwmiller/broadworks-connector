<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupDeviceMultipleContactEndpointRead
 *
 * Trunk group device endpoint that can have multiple contacts.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5527","type":"sequence"}]
 */
class TrunkGroupDeviceMultipleContactEndpointRead
{
    /**
     * @ElementName name
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5527
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5527
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $linePort = null;

    /**
     * @ElementName contact
     * @Type string
     * @Array
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5527
     * @MinLength 1
     * @MaxLength 1020
     * @var string[]
     */
    protected $contact = [
        
    ];

    /**
     * @ElementName staticRegistrationCapable
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5527
     * @var bool|null
     */
    protected $staticRegistrationCapable = null;

    /**
     * @ElementName useDomain
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5527
     * @var bool|null
     */
    protected $useDomain = null;

    /**
     * @ElementName isPilotUser
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5527
     * @var bool|null
     */
    protected $isPilotUser = null;

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
     * @return string[]
     */
    public function getContact()
    {
        return $this->contact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contact;
    }

    /**
     * Setter for contact
     *
     * @param string[] $contact
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
     * @param string $contact
     * @return $this
     */
    public function addContact(string $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Getter for staticRegistrationCapable
     *
     * @return bool
     */
    public function getStaticRegistrationCapable()
    {
        return $this->staticRegistrationCapable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->staticRegistrationCapable;
    }

    /**
     * Setter for staticRegistrationCapable
     *
     * @param bool $staticRegistrationCapable
     * @return $this
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable)
    {
        $this->staticRegistrationCapable = $staticRegistrationCapable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStaticRegistrationCapable()
    {
        $this->staticRegistrationCapable = null;
        return $this;
    }

    /**
     * Getter for useDomain
     *
     * @return bool
     */
    public function getUseDomain()
    {
        return $this->useDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDomain;
    }

    /**
     * Setter for useDomain
     *
     * @param bool $useDomain
     * @return $this
     */
    public function setUseDomain($useDomain)
    {
        $this->useDomain = $useDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDomain()
    {
        $this->useDomain = null;
        return $this;
    }

    /**
     * Getter for isPilotUser
     *
     * @return bool
     */
    public function getIsPilotUser()
    {
        return $this->isPilotUser instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isPilotUser;
    }

    /**
     * Setter for isPilotUser
     *
     * @param bool $isPilotUser
     * @return $this
     */
    public function setIsPilotUser($isPilotUser)
    {
        $this->isPilotUser = $isPilotUser;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsPilotUser()
    {
        $this->isPilotUser = null;
        return $this;
    }
}

