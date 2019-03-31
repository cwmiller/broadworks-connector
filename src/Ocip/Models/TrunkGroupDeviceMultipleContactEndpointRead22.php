<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupDeviceMultipleContactEndpointRead22
 *
 * Trunk group device endpoint that can have multiple contacts.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:4382","type":"sequence"}]
 */
class TrunkGroupDeviceMultipleContactEndpointRead22
{

    /**
     * @ElementName name
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4382
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4382
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $linePort = null;

    /**
     * @ElementName contact
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SIPContactInfo
     * @Array
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4382
     * @var \CWM\BroadWorksConnector\Ocip\Models\SIPContactInfo[]
     */
    private $contact = array(
        
    );

    /**
     * @ElementName staticRegistrationCapable
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4382
     * @var bool|null
     */
    private $staticRegistrationCapable = null;

    /**
     * @ElementName useDomain
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4382
     * @var bool|null
     */
    private $useDomain = null;

    /**
     * @ElementName isPilotUser
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4382
     * @var bool|null
     */
    private $isPilotUser = null;

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

