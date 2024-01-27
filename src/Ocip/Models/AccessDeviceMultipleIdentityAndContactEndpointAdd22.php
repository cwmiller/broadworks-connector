<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceMultipleIdentityAndContactEndpointAdd22
 *
 * Access device end point used in the context of add that can have more than one contact defined.
 *         The endpoint is identified by its linePort (public Identity) and possibly a private Identity.
 *         Only Static Registration capabable devices may have more than one contact defined.
 *         Port numbers are only used by devices with static line ordering.
 *         The following elements are only used in XS data mode and ignored in AS data mode:
 *           privateIdentity
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:306","type":"sequence"}]
 */
class AccessDeviceMultipleIdentityAndContactEndpointAdd22
{
    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Group 6337d0cfba4de1c83587203c5b0bae54:306
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    protected $accessDevice = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:306
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $linePort = null;

    /**
     * @ElementName privateIdentity
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:306
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $privateIdentity = null;

    /**
     * @ElementName contact
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SIPContactInfo
     * @Array
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:306
     * @var \CWM\BroadWorksConnector\Ocip\Models\SIPContactInfo[]
     */
    protected $contact = [
        
    ];

    /**
     * @ElementName portNumber
     * @Type int
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:306
     * @MinInclusive 1
     * @MaxInclusive 1024
     * @var int|null
     */
    protected $portNumber = null;

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
     * @return string
     */
    public function getPrivateIdentity()
    {
        return $this->privateIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->privateIdentity;
    }

    /**
     * Setter for privateIdentity
     *
     * @param string $privateIdentity
     * @return $this
     */
    public function setPrivateIdentity($privateIdentity)
    {
        $this->privateIdentity = $privateIdentity;
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
}

