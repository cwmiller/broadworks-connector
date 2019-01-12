<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMPPGetResponse22
 *
 * Response to SystemSMPPGetRequest22.
 *         
 *         The following elements are only used in AS data mode:
 *           primarySMPPServerNetAddress, value "" is returned in Amplify data mode
 *           primarySMPPPort, value "2775" is returned in Amplify data mode
 *           secondarySMPPServerNetAddress, value "" is returned in Amplify mode
 *           secondarySMPPPort, value "2775" is returned in Amplify data mode
 *           systemId, value "" is returned in Amplify data mode
 *           password, value "" is returned in Amplify mode
 *           version, value "" is returned in Amplify data mode
 *           systemType, value "VMS" is returned in Amplify mode
 *           useGsmMwiUcs2Encoding, value "true" is returned in Amplify mode
 *
 * @see SystemSMPPGetRequest22
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:16043","type":"sequence"}]
 */
class SystemSMPPGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName primarySMPPServerNetAddress
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16043
     * @var string|null
     */
    private $primarySMPPServerNetAddress = null;

    /**
     * @ElementName primarySMPPPort
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16043
     * @var int|null
     */
    private $primarySMPPPort = null;

    /**
     * @ElementName secondarySMPPServerNetAddress
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16043
     * @var string|null
     */
    private $secondarySMPPServerNetAddress = null;

    /**
     * @ElementName secondarySMPPPort
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16043
     * @var int|null
     */
    private $secondarySMPPPort = null;

    /**
     * @ElementName systemId
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16043
     * @var string|null
     */
    private $systemId = null;

    /**
     * @ElementName password
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16043
     * @var string|null
     */
    private $password = null;

    /**
     * @ElementName version
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SMPPVersion
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16043
     * @var \CWM\BroadWorksConnector\Ocip\Models\SMPPVersion|null
     */
    private $version = null;

    /**
     * @ElementName systemType
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16043
     * @var string|null
     */
    private $systemType = null;

    /**
     * @ElementName enableMWICustomizedMessage
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16043
     * @var bool|null
     */
    private $enableMWICustomizedMessage = null;

    /**
     * @ElementName supportMessagePayload
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16043
     * @var bool|null
     */
    private $supportMessagePayload = null;

    /**
     * @ElementName maxShortMessageLength
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16043
     * @var int|null
     */
    private $maxShortMessageLength = null;

    /**
     * @ElementName useGsmMwiUcs2Encoding
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16043
     * @var bool|null
     */
    private $useGsmMwiUcs2Encoding = null;

    /**
     * @ElementName includeOnlyNewMessageCount
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16043
     * @var bool|null
     */
    private $includeOnlyNewMessageCount = null;

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

