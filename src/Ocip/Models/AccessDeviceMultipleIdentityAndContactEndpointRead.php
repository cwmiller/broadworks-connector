<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceMultipleIdentityAndContactEndpointRead
 *
 * Access device end point that can have multiple contacts.
 *         The endpoint is identified by its linePort (public Identity) and
 * possibly a private Identity.
 * 	Port numbers are only used by devices with static line ordering.
 *         The following elements are only used in HSS data mode and not returned
 * in AS data mode:
 *           privateIdentity
 *         The following elements are only used in AS data mode and a value false
 * is returned in the HSS mode:
 *           supportVisualDeviceManagement
 */
class AccessDeviceMultipleIdentityAndContactEndpointRead
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
     * @ElementName portNumber
     * @var int|null
     */
    private $portNumber = null;

    /**
     * @ElementName supportVisualDeviceManagement
     * @var bool|null
     */
    private $supportVisualDeviceManagement = null;

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

    /**
     * Getter for supportVisualDeviceManagement
     *
     * @ElementName supportVisualDeviceManagement
     * @return bool|null
     */
    public function getSupportVisualDeviceManagement()
    {
        return $this->supportVisualDeviceManagement;
    }

    /**
     * Setter for supportVisualDeviceManagement
     *
     * @ElementName supportVisualDeviceManagement
     * @param bool|null $supportVisualDeviceManagement
     * @return $this
     */
    public function setSupportVisualDeviceManagement($supportVisualDeviceManagement)
    {
        $this->supportVisualDeviceManagement = $supportVisualDeviceManagement;
        return $this;
    }


}

