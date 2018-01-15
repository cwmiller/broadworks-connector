<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TrunkGroupDeviceEndpointRead14sp4
 *
 * Trunk group device endpoint.
 */
class TrunkGroupDeviceEndpointRead14sp4
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
     * @var string|null
     */
    private $contact = null;

    /**
     * @ElementName staticRegistrationCapable
     * @var bool|null
     */
    private $staticRegistrationCapable = null;

    /**
     * @ElementName useDomain
     * @var bool|null
     */
    private $useDomain = null;

    /**
     * @ElementName isPilotUser
     * @var bool|null
     */
    private $isPilotUser = null;

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
     * @return string|null
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Setter for contact
     *
     * @ElementName contact
     * @param string|null $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Getter for staticRegistrationCapable
     *
     * @ElementName staticRegistrationCapable
     * @return bool|null
     */
    public function getStaticRegistrationCapable()
    {
        return $this->staticRegistrationCapable;
    }

    /**
     * Setter for staticRegistrationCapable
     *
     * @ElementName staticRegistrationCapable
     * @param bool|null $staticRegistrationCapable
     * @return $this
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable)
    {
        $this->staticRegistrationCapable = $staticRegistrationCapable;
        return $this;
    }

    /**
     * Getter for useDomain
     *
     * @ElementName useDomain
     * @return bool|null
     */
    public function getUseDomain()
    {
        return $this->useDomain;
    }

    /**
     * Setter for useDomain
     *
     * @ElementName useDomain
     * @param bool|null $useDomain
     * @return $this
     */
    public function setUseDomain($useDomain)
    {
        $this->useDomain = $useDomain;
        return $this;
    }

    /**
     * Getter for isPilotUser
     *
     * @ElementName isPilotUser
     * @return bool|null
     */
    public function getIsPilotUser()
    {
        return $this->isPilotUser;
    }

    /**
     * Setter for isPilotUser
     *
     * @ElementName isPilotUser
     * @param bool|null $isPilotUser
     * @return $this
     */
    public function setIsPilotUser($isPilotUser)
    {
        $this->isPilotUser = $isPilotUser;
        return $this;
    }


}

