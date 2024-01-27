<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceEndpointWithPortNumberRead22V2
 *
 * Access device end point.
 *         Port numbers are only used by devices with static line ordering.
 *         The following element is only used in AS data mode and ignored in XS data mode:
 *           pathHeader
 *           hotlineContact
 *
 *         The following elements are only used in AS data mode and a value false is returned in the XS mode:
 *           useHotline
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:183","type":"sequence"}]
 */
class AccessDeviceEndpointWithPortNumberRead22V2
{
    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Group 6337d0cfba4de1c83587203c5b0bae54:183
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    protected $accessDevice = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:183
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $linePort = null;

    /**
     * @ElementName contact
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:183
     * @MinLength 1
     * @MaxLength 1020
     * @var string|null
     */
    protected $contact = null;

    /**
     * @ElementName pathHeader
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:183
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null
     */
    protected $pathHeader = null;

    /**
     * @ElementName staticRegistrationCapable
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:183
     * @var bool|null
     */
    protected $staticRegistrationCapable = null;

    /**
     * @ElementName useDomain
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:183
     * @var bool|null
     */
    protected $useDomain = null;

    /**
     * @ElementName portNumber
     * @Type int
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:183
     * @MinInclusive 1
     * @MaxInclusive 1024
     * @var int|null
     */
    protected $portNumber = null;

    /**
     * @ElementName useHotline
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:183
     * @var bool|null
     */
    protected $useHotline = null;

    /**
     * @ElementName hotlineContact
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:183
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
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

    /**
     * Getter for pathHeader
     *
     * @return string
     */
    public function getPathHeader()
    {
        return $this->pathHeader instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pathHeader;
    }

    /**
     * Setter for pathHeader
     *
     * @param string $pathHeader
     * @return $this
     */
    public function setPathHeader($pathHeader)
    {
        $this->pathHeader = $pathHeader;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPathHeader()
    {
        $this->pathHeader = null;
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
     * @return string
     */
    public function getHotlineContact()
    {
        return $this->hotlineContact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hotlineContact;
    }

    /**
     * Setter for hotlineContact
     *
     * @param string $hotlineContact
     * @return $this
     */
    public function setHotlineContact($hotlineContact)
    {
        $this->hotlineContact = $hotlineContact;
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

