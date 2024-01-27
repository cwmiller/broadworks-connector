<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceMultipleIdentityAndContactEndpointModify22
 *
 * Access device end point used in the context of modify that can have more than one contact defined.
 *         The endpoint is identified by its linePort (public Identity) and possibly a private Identity.
 *         Only Static Registration capable devices may have more than one contact defined.
 *         Port numbers are only used by devices with static line ordering.
 *         The following elements are only used in XS data mode and ignored in AS data mode:
 *           privateIdentity
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           useHotline
 *           hotlineContact
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:376","type":"sequence"}]
 */
class AccessDeviceMultipleIdentityAndContactEndpointModify22
{
    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:376
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    protected $accessDevice = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:376
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $linePort = null;

    /**
     * @ElementName privateIdentity
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:376
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $privateIdentity = null;

    /**
     * @ElementName contactList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList22
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:376
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList22|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $contactList = null;

    /**
     * @ElementName portNumber
     * @Type int
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:376
     * @MinInclusive 1
     * @MaxInclusive 1024
     * @var int|null
     */
    protected $portNumber = null;

    /**
     * @ElementName useHotline
     * @Type bool
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:376
     * @var bool|null
     */
    protected $useHotline = null;

    /**
     * @ElementName hotlineContact
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:376
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $hotlineContact = null;

    /**
     * Getter for accessDevice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     */
    public function getAccessDevice()
    {
        return $this->accessDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice
     * @return $this
     */
    public function setAccessDevice(\CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice)
    {
        $this->accessDevice = $accessDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDevice()
    {
        $this->accessDevice = null;
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
     * Getter for privateIdentity
     *
     * @return string|null
     */
    public function getPrivateIdentity()
    {
        return $this->privateIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->privateIdentity;
    }

    /**
     * Setter for privateIdentity
     *
     * @param string|null $privateIdentity
     * @return $this
     */
    public function setPrivateIdentity($privateIdentity = null)
    {
        if ($privateIdentity === null) {
            $this->privateIdentity = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->privateIdentity = $privateIdentity;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrivateIdentity()
    {
        $this->privateIdentity = null;
        return $this;
    }

    /**
     * Getter for contactList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList22|null
     */
    public function getContactList()
    {
        return $this->contactList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contactList;
    }

    /**
     * Setter for contactList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList22|null $contactList
     * @return $this
     */
    public function setContactList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList22 $contactList = null)
    {
        if ($contactList === null) {
            $this->contactList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->contactList = $contactList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContactList()
    {
        $this->contactList = null;
        return $this;
    }

    /**
     * Getter for portNumber
     *
     * @return int
     */
    public function getPortNumber()
    {
        return $this->portNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->portNumber;
    }

    /**
     * Setter for portNumber
     *
     * @param int $portNumber
     * @return $this
     */
    public function setPortNumber($portNumber)
    {
        $this->portNumber = $portNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPortNumber()
    {
        $this->portNumber = null;
        return $this;
    }

    /**
     * Getter for useHotline
     *
     * @return bool
     */
    public function getUseHotline()
    {
        return $this->useHotline instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useHotline;
    }

    /**
     * Setter for useHotline
     *
     * @param bool $useHotline
     * @return $this
     */
    public function setUseHotline($useHotline)
    {
        $this->useHotline = $useHotline;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseHotline()
    {
        $this->useHotline = null;
        return $this;
    }

    /**
     * Getter for hotlineContact
     *
     * @return string|null
     */
    public function getHotlineContact()
    {
        return $this->hotlineContact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hotlineContact;
    }

    /**
     * Setter for hotlineContact
     *
     * @param string|null $hotlineContact
     * @return $this
     */
    public function setHotlineContact($hotlineContact = null)
    {
        if ($hotlineContact === null) {
            $this->hotlineContact = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->hotlineContact = $hotlineContact;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHotlineContact()
    {
        $this->hotlineContact = null;
        return $this;
    }
}

