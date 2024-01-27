<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMPPGetResponse14sp5
 *
 * Response to SystemSMPPGetRequest14sp5.
 *         
 *         Replaced by: SystemSMPPGetResponse21 in AS data mode
 *
 * @see SystemSMPPGetRequest14sp5
 * @see SystemSMPPGetResponse21
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:15313","type":"sequence"}]
 */
class SystemSMPPGetResponse14sp5 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName primarySMPPServerNetAddress
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:15313
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $primarySMPPServerNetAddress = null;

    /**
     * @ElementName primarySMPPPort
     * @Type int
     * @Group 240b50f54d060859e5e275082fdf49f9:15313
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $primarySMPPPort = null;

    /**
     * @ElementName secondarySMPPServerNetAddress
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:15313
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $secondarySMPPServerNetAddress = null;

    /**
     * @ElementName secondarySMPPPort
     * @Type int
     * @Group 240b50f54d060859e5e275082fdf49f9:15313
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $secondarySMPPPort = null;

    /**
     * @ElementName systemId
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:15313
     * @MinLength 1
     * @MaxLength 16
     * @var string|null
     */
    protected $systemId = null;

    /**
     * @ElementName password
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:15313
     * @MinLength 1
     * @MaxLength 8
     * @var string|null
     */
    protected $password = null;

    /**
     * @ElementName version
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SMPPVersion
     * @Group 240b50f54d060859e5e275082fdf49f9:15313
     * @var \CWM\BroadWorksConnector\Ocip\Models\SMPPVersion|null
     */
    protected $version = null;

    /**
     * @ElementName systemType
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:15313
     * @MinLength 1
     * @MaxLength 12
     * @var string|null
     */
    protected $systemType = null;

    /**
     * Getter for primarySMPPServerNetAddress
     *
     * @return string
     */
    public function getPrimarySMPPServerNetAddress()
    {
        return $this->primarySMPPServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->primarySMPPServerNetAddress;
    }

    /**
     * Setter for primarySMPPServerNetAddress
     *
     * @param string $primarySMPPServerNetAddress
     * @return $this
     */
    public function setPrimarySMPPServerNetAddress($primarySMPPServerNetAddress)
    {
        $this->primarySMPPServerNetAddress = $primarySMPPServerNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrimarySMPPServerNetAddress()
    {
        $this->primarySMPPServerNetAddress = null;
        return $this;
    }

    /**
     * Getter for primarySMPPPort
     *
     * @return int
     */
    public function getPrimarySMPPPort()
    {
        return $this->primarySMPPPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->primarySMPPPort;
    }

    /**
     * Setter for primarySMPPPort
     *
     * @param int $primarySMPPPort
     * @return $this
     */
    public function setPrimarySMPPPort($primarySMPPPort)
    {
        $this->primarySMPPPort = $primarySMPPPort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrimarySMPPPort()
    {
        $this->primarySMPPPort = null;
        return $this;
    }

    /**
     * Getter for secondarySMPPServerNetAddress
     *
     * @return string
     */
    public function getSecondarySMPPServerNetAddress()
    {
        return $this->secondarySMPPServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secondarySMPPServerNetAddress;
    }

    /**
     * Setter for secondarySMPPServerNetAddress
     *
     * @param string $secondarySMPPServerNetAddress
     * @return $this
     */
    public function setSecondarySMPPServerNetAddress($secondarySMPPServerNetAddress)
    {
        $this->secondarySMPPServerNetAddress = $secondarySMPPServerNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecondarySMPPServerNetAddress()
    {
        $this->secondarySMPPServerNetAddress = null;
        return $this;
    }

    /**
     * Getter for secondarySMPPPort
     *
     * @return int
     */
    public function getSecondarySMPPPort()
    {
        return $this->secondarySMPPPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secondarySMPPPort;
    }

    /**
     * Setter for secondarySMPPPort
     *
     * @param int $secondarySMPPPort
     * @return $this
     */
    public function setSecondarySMPPPort($secondarySMPPPort)
    {
        $this->secondarySMPPPort = $secondarySMPPPort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecondarySMPPPort()
    {
        $this->secondarySMPPPort = null;
        return $this;
    }

    /**
     * Getter for systemId
     *
     * @return string
     */
    public function getSystemId()
    {
        return $this->systemId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemId;
    }

    /**
     * Setter for systemId
     *
     * @param string $systemId
     * @return $this
     */
    public function setSystemId($systemId)
    {
        $this->systemId = $systemId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSystemId()
    {
        $this->systemId = null;
        return $this;
    }

    /**
     * Getter for password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->password;
    }

    /**
     * Setter for password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPassword()
    {
        $this->password = null;
        return $this;
    }

    /**
     * Getter for version
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SMPPVersion
     */
    public function getVersion()
    {
        return $this->version instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->version;
    }

    /**
     * Setter for version
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SMPPVersion $version
     * @return $this
     */
    public function setVersion(\CWM\BroadWorksConnector\Ocip\Models\SMPPVersion $version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVersion()
    {
        $this->version = null;
        return $this;
    }

    /**
     * Getter for systemType
     *
     * @return string
     */
    public function getSystemType()
    {
        return $this->systemType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemType;
    }

    /**
     * Setter for systemType
     *
     * @param string $systemType
     * @return $this
     */
    public function setSystemType($systemType)
    {
        $this->systemType = $systemType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSystemType()
    {
        $this->systemType = null;
        return $this;
    }
}

