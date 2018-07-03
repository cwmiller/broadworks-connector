<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMPPModifyRequest
 *
 * Request to modify the system level data associated with the SMPP external
 * interface.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSMPPModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName primarySMPPServerNetAddress
     * @var string|null
     */
    private $primarySMPPServerNetAddress = null;

    /**
     * @ElementName primarySMPPPort
     * @var int|null
     */
    private $primarySMPPPort = null;

    /**
     * @ElementName secondarySMPPServerNetAddress
     * @var string|null
     */
    private $secondarySMPPServerNetAddress = null;

    /**
     * @ElementName secondarySMPPPort
     * @var int|null
     */
    private $secondarySMPPPort = null;

    /**
     * @ElementName systemId
     * @var string|null
     */
    private $systemId = null;

    /**
     * @ElementName password
     * @var string|null
     */
    private $password = null;

    /**
     * @ElementName version
     * @var string|null
     */
    private $version = null;

    /**
     * @ElementName systemType
     * @var string|null
     */
    private $systemType = null;

    /**
     * @ElementName enableMWICustomizedMessage
     * @var bool|null
     */
    private $enableMWICustomizedMessage = null;

    /**
     * @ElementName supportMessagePayload
     * @var bool|null
     */
    private $supportMessagePayload = null;

    /**
     * @ElementName maxShortMessageLength
     * @var int|null
     */
    private $maxShortMessageLength = null;

    /**
     * @ElementName useGsmMwiUcs2Encoding
     * @var bool|null
     */
    private $useGsmMwiUcs2Encoding = null;

    /**
     * Getter for primarySMPPServerNetAddress
     *
     * @ElementName primarySMPPServerNetAddress
     * @return string|null
     */
    public function getPrimarySMPPServerNetAddress()
    {
        return $this->primarySMPPServerNetAddress;
    }

    /**
     * Setter for primarySMPPServerNetAddress
     *
     * @ElementName primarySMPPServerNetAddress
     * @param string|null $primarySMPPServerNetAddress
     * @return $this
     */
    public function setPrimarySMPPServerNetAddress($primarySMPPServerNetAddress)
    {
        $this->primarySMPPServerNetAddress = $primarySMPPServerNetAddress;
        return $this;
    }

    /**
     * Getter for primarySMPPPort
     *
     * @ElementName primarySMPPPort
     * @return int|null
     */
    public function getPrimarySMPPPort()
    {
        return $this->primarySMPPPort;
    }

    /**
     * Setter for primarySMPPPort
     *
     * @ElementName primarySMPPPort
     * @param int|null $primarySMPPPort
     * @return $this
     */
    public function setPrimarySMPPPort($primarySMPPPort)
    {
        $this->primarySMPPPort = $primarySMPPPort;
        return $this;
    }

    /**
     * Getter for secondarySMPPServerNetAddress
     *
     * @ElementName secondarySMPPServerNetAddress
     * @return string|null
     */
    public function getSecondarySMPPServerNetAddress()
    {
        return $this->secondarySMPPServerNetAddress;
    }

    /**
     * Setter for secondarySMPPServerNetAddress
     *
     * @ElementName secondarySMPPServerNetAddress
     * @param string|null $secondarySMPPServerNetAddress
     * @return $this
     */
    public function setSecondarySMPPServerNetAddress($secondarySMPPServerNetAddress)
    {
        $this->secondarySMPPServerNetAddress = $secondarySMPPServerNetAddress;
        return $this;
    }

    /**
     * Getter for secondarySMPPPort
     *
     * @ElementName secondarySMPPPort
     * @return int|null
     */
    public function getSecondarySMPPPort()
    {
        return $this->secondarySMPPPort;
    }

    /**
     * Setter for secondarySMPPPort
     *
     * @ElementName secondarySMPPPort
     * @param int|null $secondarySMPPPort
     * @return $this
     */
    public function setSecondarySMPPPort($secondarySMPPPort)
    {
        $this->secondarySMPPPort = $secondarySMPPPort;
        return $this;
    }

    /**
     * Getter for systemId
     *
     * @ElementName systemId
     * @return string|null
     */
    public function getSystemId()
    {
        return $this->systemId;
    }

    /**
     * Setter for systemId
     *
     * @ElementName systemId
     * @param string|null $systemId
     * @return $this
     */
    public function setSystemId($systemId)
    {
        $this->systemId = $systemId;
        return $this;
    }

    /**
     * Getter for password
     *
     * @ElementName password
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Setter for password
     *
     * @ElementName password
     * @param string|null $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Getter for version
     *
     * @ElementName version
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Setter for version
     *
     * @ElementName version
     * @param string|null $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Getter for systemType
     *
     * @ElementName systemType
     * @return string|null
     */
    public function getSystemType()
    {
        return $this->systemType;
    }

    /**
     * Setter for systemType
     *
     * @ElementName systemType
     * @param string|null $systemType
     * @return $this
     */
    public function setSystemType($systemType)
    {
        $this->systemType = $systemType;
        return $this;
    }

    /**
     * Getter for enableMWICustomizedMessage
     *
     * @ElementName enableMWICustomizedMessage
     * @return bool|null
     */
    public function getEnableMWICustomizedMessage()
    {
        return $this->enableMWICustomizedMessage;
    }

    /**
     * Setter for enableMWICustomizedMessage
     *
     * @ElementName enableMWICustomizedMessage
     * @param bool|null $enableMWICustomizedMessage
     * @return $this
     */
    public function setEnableMWICustomizedMessage($enableMWICustomizedMessage)
    {
        $this->enableMWICustomizedMessage = $enableMWICustomizedMessage;
        return $this;
    }

    /**
     * Getter for supportMessagePayload
     *
     * @ElementName supportMessagePayload
     * @return bool|null
     */
    public function getSupportMessagePayload()
    {
        return $this->supportMessagePayload;
    }

    /**
     * Setter for supportMessagePayload
     *
     * @ElementName supportMessagePayload
     * @param bool|null $supportMessagePayload
     * @return $this
     */
    public function setSupportMessagePayload($supportMessagePayload)
    {
        $this->supportMessagePayload = $supportMessagePayload;
        return $this;
    }

    /**
     * Getter for maxShortMessageLength
     *
     * @ElementName maxShortMessageLength
     * @return int|null
     */
    public function getMaxShortMessageLength()
    {
        return $this->maxShortMessageLength;
    }

    /**
     * Setter for maxShortMessageLength
     *
     * @ElementName maxShortMessageLength
     * @param int|null $maxShortMessageLength
     * @return $this
     */
    public function setMaxShortMessageLength($maxShortMessageLength)
    {
        $this->maxShortMessageLength = $maxShortMessageLength;
        return $this;
    }

    /**
     * Getter for useGsmMwiUcs2Encoding
     *
     * @ElementName useGsmMwiUcs2Encoding
     * @return bool|null
     */
    public function getUseGsmMwiUcs2Encoding()
    {
        return $this->useGsmMwiUcs2Encoding;
    }

    /**
     * Setter for useGsmMwiUcs2Encoding
     *
     * @ElementName useGsmMwiUcs2Encoding
     * @param bool|null $useGsmMwiUcs2Encoding
     * @return $this
     */
    public function setUseGsmMwiUcs2Encoding($useGsmMwiUcs2Encoding)
    {
        $this->useGsmMwiUcs2Encoding = $useGsmMwiUcs2Encoding;
        return $this;
    }


}

