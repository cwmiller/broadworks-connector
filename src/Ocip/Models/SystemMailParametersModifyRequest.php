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
     * @var string|null
     */
    private $primaryServerNetAddress = null;

    /**
     * @ElementName secondaryServerNetAddress
     * @var string|null
     */
    private $secondaryServerNetAddress = null;

    /**
     * @ElementName defaultFromAddress
     * @var string|null
     */
    private $defaultFromAddress = null;

    /**
     * @ElementName defaultSubject
     * @var string|null
     */
    private $defaultSubject = null;

    /**
     * @ElementName supportDNSSRVForMailServerAccess
     * @var bool|null
     */
    private $supportDNSSRVForMailServerAccess = null;

    /**
     * @ElementName secureMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\SMTPSecureMode|null
     */
    private $secureMode = null;

    /**
     * @ElementName port
     * @var int|null
     */
    private $port = null;

    /**
     * Getter for primaryServerNetAddress
     *
     * @ElementName primaryServerNetAddress
     * @return string|null
     */
    public function getPrimaryServerNetAddress()
    {
        return $this->primaryServerNetAddress;
    }

    /**
     * Setter for primaryServerNetAddress
     *
     * @ElementName primaryServerNetAddress
     * @param string|null $primaryServerNetAddress
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
     * @return string|null
     */
    public function getSecondaryServerNetAddress()
    {
        return $this->secondaryServerNetAddress;
    }

    /**
     * Setter for secondaryServerNetAddress
     *
     * @ElementName secondaryServerNetAddress
     * @param string|null $secondaryServerNetAddress
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
     * @return string|null
     */
    public function getDefaultSubject()
    {
        return $this->defaultSubject;
    }

    /**
     * Setter for defaultSubject
     *
     * @ElementName defaultSubject
     * @param string|null $defaultSubject
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SMTPSecureMode|null
     */
    public function getSecureMode()
    {
        return $this->secureMode;
    }

    /**
     * Setter for secureMode
     *
     * @ElementName secureMode
     * @param \CWM\BroadWorksConnector\Ocip\Models\SMTPSecureMode|null $secureMode
     * @return $this
     */
    public function setSecureMode(\CWM\BroadWorksConnector\Ocip\Models\SMTPSecureMode $secureMode)
    {
        $this->secureMode = $secureMode;
        return $this;
    }

    /**
     * Getter for port
     *
     * @ElementName port
     * @return int|null
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Setter for port
     *
     * @ElementName port
     * @param int|null $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }


}

