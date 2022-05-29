<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMPPModifyRequest
 *
 * Request to modify the system level data associated with the SMPP external interface.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:17804","type":"sequence"}]
 */
class SystemSMPPModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName primarySMPPServerNetAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17804
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $primarySMPPServerNetAddress = null;

    /**
     * @ElementName primarySMPPPort
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17804
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $primarySMPPPort = null;

    /**
     * @ElementName secondarySMPPServerNetAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17804
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $secondarySMPPServerNetAddress = null;

    /**
     * @ElementName secondarySMPPPort
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17804
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $secondarySMPPPort = null;

    /**
     * @ElementName systemId
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17804
     * @MinLength 1
     * @MaxLength 16
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $systemId = null;

    /**
     * @ElementName password
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17804
     * @MinLength 1
     * @MaxLength 8
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $password = null;

    /**
     * @ElementName version
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SMPPVersion
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17804
     * @var \CWM\BroadWorksConnector\Ocip\Models\SMPPVersion|null
     */
    protected $version = null;

    /**
     * @ElementName systemType
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17804
     * @MinLength 1
     * @MaxLength 12
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $systemType = null;

    /**
     * @ElementName enableMWICustomizedMessage
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17804
     * @var bool|null
     */
    protected $enableMWICustomizedMessage = null;

    /**
     * @ElementName supportMessagePayload
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17804
     * @var bool|null
     */
    protected $supportMessagePayload = null;

    /**
     * @ElementName maxShortMessageLength
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17804
     * @MinInclusive 1
     * @MaxInclusive 70
     * @var int|null
     */
    protected $maxShortMessageLength = null;

    /**
     * @ElementName useGsmMwiUcs2Encoding
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17804
     * @var bool|null
     */
    protected $useGsmMwiUcs2Encoding = null;

    /**
     * @ElementName includeOnlyNewMessageCount
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17804
     * @var bool|null
     */
    protected $includeOnlyNewMessageCount = null;

    /**
     * Getter for primarySMPPServerNetAddress
     *
     * @return string|null
     */
    public function getPrimarySMPPServerNetAddress()
    {
        return $this->primarySMPPServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->primarySMPPServerNetAddress;
    }

    /**
     * Setter for primarySMPPServerNetAddress
     *
     * @param string|null $primarySMPPServerNetAddress
     * @return $this
     */
    public function setPrimarySMPPServerNetAddress($primarySMPPServerNetAddress = null)
    {
        if ($primarySMPPServerNetAddress === null) {
            $this->primarySMPPServerNetAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->primarySMPPServerNetAddress = $primarySMPPServerNetAddress;
        }
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
     * @return string|null
     */
    public function getSecondarySMPPServerNetAddress()
    {
        return $this->secondarySMPPServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secondarySMPPServerNetAddress;
    }

    /**
     * Setter for secondarySMPPServerNetAddress
     *
     * @param string|null $secondarySMPPServerNetAddress
     * @return $this
     */
    public function setSecondarySMPPServerNetAddress($secondarySMPPServerNetAddress = null)
    {
        if ($secondarySMPPServerNetAddress === null) {
            $this->secondarySMPPServerNetAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->secondarySMPPServerNetAddress = $secondarySMPPServerNetAddress;
        }
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
     * @return string|null
     */
    public function getSystemId()
    {
        return $this->systemId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemId;
    }

    /**
     * Setter for systemId
     *
     * @param string|null $systemId
     * @return $this
     */
    public function setSystemId($systemId = null)
    {
        if ($systemId === null) {
            $this->systemId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->systemId = $systemId;
        }
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
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->password;
    }

    /**
     * Setter for password
     *
     * @param string|null $password
     * @return $this
     */
    public function setPassword($password = null)
    {
        if ($password === null) {
            $this->password = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->password = $password;
        }
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
     * @return string|null
     */
    public function getSystemType()
    {
        return $this->systemType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemType;
    }

    /**
     * Setter for systemType
     *
     * @param string|null $systemType
     * @return $this
     */
    public function setSystemType($systemType = null)
    {
        if ($systemType === null) {
            $this->systemType = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->systemType = $systemType;
        }
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

    /**
     * Getter for enableMWICustomizedMessage
     *
     * @return bool
     */
    public function getEnableMWICustomizedMessage()
    {
        return $this->enableMWICustomizedMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableMWICustomizedMessage;
    }

    /**
     * Setter for enableMWICustomizedMessage
     *
     * @param bool $enableMWICustomizedMessage
     * @return $this
     */
    public function setEnableMWICustomizedMessage($enableMWICustomizedMessage)
    {
        $this->enableMWICustomizedMessage = $enableMWICustomizedMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableMWICustomizedMessage()
    {
        $this->enableMWICustomizedMessage = null;
        return $this;
    }

    /**
     * Getter for supportMessagePayload
     *
     * @return bool
     */
    public function getSupportMessagePayload()
    {
        return $this->supportMessagePayload instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportMessagePayload;
    }

    /**
     * Setter for supportMessagePayload
     *
     * @param bool $supportMessagePayload
     * @return $this
     */
    public function setSupportMessagePayload($supportMessagePayload)
    {
        $this->supportMessagePayload = $supportMessagePayload;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportMessagePayload()
    {
        $this->supportMessagePayload = null;
        return $this;
    }

    /**
     * Getter for maxShortMessageLength
     *
     * @return int
     */
    public function getMaxShortMessageLength()
    {
        return $this->maxShortMessageLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxShortMessageLength;
    }

    /**
     * Setter for maxShortMessageLength
     *
     * @param int $maxShortMessageLength
     * @return $this
     */
    public function setMaxShortMessageLength($maxShortMessageLength)
    {
        $this->maxShortMessageLength = $maxShortMessageLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxShortMessageLength()
    {
        $this->maxShortMessageLength = null;
        return $this;
    }

    /**
     * Getter for useGsmMwiUcs2Encoding
     *
     * @return bool
     */
    public function getUseGsmMwiUcs2Encoding()
    {
        return $this->useGsmMwiUcs2Encoding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useGsmMwiUcs2Encoding;
    }

    /**
     * Setter for useGsmMwiUcs2Encoding
     *
     * @param bool $useGsmMwiUcs2Encoding
     * @return $this
     */
    public function setUseGsmMwiUcs2Encoding($useGsmMwiUcs2Encoding)
    {
        $this->useGsmMwiUcs2Encoding = $useGsmMwiUcs2Encoding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseGsmMwiUcs2Encoding()
    {
        $this->useGsmMwiUcs2Encoding = null;
        return $this;
    }

    /**
     * Getter for includeOnlyNewMessageCount
     *
     * @return bool
     */
    public function getIncludeOnlyNewMessageCount()
    {
        return $this->includeOnlyNewMessageCount instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeOnlyNewMessageCount;
    }

    /**
     * Setter for includeOnlyNewMessageCount
     *
     * @param bool $includeOnlyNewMessageCount
     * @return $this
     */
    public function setIncludeOnlyNewMessageCount($includeOnlyNewMessageCount)
    {
        $this->includeOnlyNewMessageCount = $includeOnlyNewMessageCount;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeOnlyNewMessageCount()
    {
        $this->includeOnlyNewMessageCount = null;
        return $this;
    }


}

