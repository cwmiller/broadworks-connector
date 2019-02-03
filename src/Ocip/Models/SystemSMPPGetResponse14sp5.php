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
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:3312","type":"sequence"}]
 */
class SystemSMPPGetResponse14sp5 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName primarySMPPServerNetAddress
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:3312
     * @var string|null
     */
    private $primarySMPPServerNetAddress = null;

    /**
     * @ElementName primarySMPPPort
     * @Type int
     * @Group de4d76f01f337fe4694212ec9f771753:3312
     * @var int|null
     */
    private $primarySMPPPort = null;

    /**
     * @ElementName secondarySMPPServerNetAddress
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:3312
     * @var string|null
     */
    private $secondarySMPPServerNetAddress = null;

    /**
     * @ElementName secondarySMPPPort
     * @Type int
     * @Group de4d76f01f337fe4694212ec9f771753:3312
     * @var int|null
     */
    private $secondarySMPPPort = null;

    /**
     * @ElementName systemId
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:3312
     * @var string|null
     */
    private $systemId = null;

    /**
     * @ElementName password
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:3312
     * @var string|null
     */
    private $password = null;

    /**
     * @ElementName version
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SMPPVersion
     * @Group de4d76f01f337fe4694212ec9f771753:3312
     * @var \CWM\BroadWorksConnector\Ocip\Models\SMPPVersion|null
     */
    private $version = null;

    /**
     * @ElementName systemType
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:3312
     * @var string|null
     */
    private $systemType = null;

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

