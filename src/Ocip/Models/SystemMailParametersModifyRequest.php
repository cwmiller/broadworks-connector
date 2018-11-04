<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMailParametersModifyRequest
 *
 * Request to modify Mail system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemMailParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName primaryServerNetAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $primaryServerNetAddress = null;

    /**
     * @ElementName secondaryServerNetAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $secondaryServerNetAddress = null;

    /**
     * @ElementName defaultFromAddress
     * @var string|null
     */
    private $defaultFromAddress = null;

    /**
     * @ElementName defaultSubject
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultSubject = null;

    /**
     * @ElementName supportDNSSRVForMailServerAccess
     * @var bool|null
     */
    private $supportDNSSRVForMailServerAccess = null;

    /**
     * @ElementName secureMode
     * @var string|null
     */
    private $secureMode = null;

    /**
     * @ElementName port
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $port = null;

    /**
     * Getter for primaryServerNetAddress
     *
     * @ElementName primaryServerNetAddress
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPrimaryServerNetAddress()
    {
        return $this->primaryServerNetAddress;
    }

    /**
     * Setter for primaryServerNetAddress
     *
     * @ElementName primaryServerNetAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $primaryServerNetAddress
     * @return $this
     */
    public function setPrimaryServerNetAddress($primaryServerNetAddress)
    {
        $this->primaryServerNetAddress = $primaryServerNetAddress;
        return $this;
    }

    /**
     * Getter for secondaryServerNetAddress
     *
     * @ElementName secondaryServerNetAddress
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSecondaryServerNetAddress()
    {
        return $this->secondaryServerNetAddress;
    }

    /**
     * Setter for secondaryServerNetAddress
     *
     * @ElementName secondaryServerNetAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $secondaryServerNetAddress
     * @return $this
     */
    public function setSecondaryServerNetAddress($secondaryServerNetAddress)
    {
        $this->secondaryServerNetAddress = $secondaryServerNetAddress;
        return $this;
    }

    /**
     * Getter for defaultFromAddress
     *
     * @ElementName defaultFromAddress
     * @return string|null
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @ElementName defaultFromAddress
     * @param string|null $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }

    /**
     * Getter for defaultSubject
     *
     * @ElementName defaultSubject
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDefaultSubject()
    {
        return $this->defaultSubject;
    }

    /**
     * Setter for defaultSubject
     *
     * @ElementName defaultSubject
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $defaultSubject
     * @return $this
     */
    public function setDefaultSubject($defaultSubject)
    {
        $this->defaultSubject = $defaultSubject;
        return $this;
    }

    /**
     * Getter for supportDNSSRVForMailServerAccess
     *
     * @ElementName supportDNSSRVForMailServerAccess
     * @return bool|null
     */
    public function getSupportDNSSRVForMailServerAccess()
    {
        return $this->supportDNSSRVForMailServerAccess;
    }

    /**
     * Setter for supportDNSSRVForMailServerAccess
     *
     * @ElementName supportDNSSRVForMailServerAccess
     * @param bool|null $supportDNSSRVForMailServerAccess
     * @return $this
     */
    public function setSupportDNSSRVForMailServerAccess($supportDNSSRVForMailServerAccess)
    {
        $this->supportDNSSRVForMailServerAccess = $supportDNSSRVForMailServerAccess;
        return $this;
    }

    /**
     * Getter for secureMode
     *
     * @ElementName secureMode
     * @return string|null
     */
    public function getSecureMode()
    {
        return $this->secureMode;
    }

    /**
     * Setter for secureMode
     *
     * @ElementName secureMode
     * @param string|null $secureMode
     * @return $this
     */
    public function setSecureMode($secureMode)
    {
        $this->secureMode = $secureMode;
        return $this;
    }

    /**
     * Getter for port
     *
     * @ElementName port
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Setter for port
     *
     * @ElementName port
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }


}

