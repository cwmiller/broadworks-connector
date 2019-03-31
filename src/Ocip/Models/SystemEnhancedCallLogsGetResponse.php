<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEnhancedCallLogsGetResponse
 *
 * Response to SystemEnhancedCallLogsGetRequest.
 *
 * @see SystemEnhancedCallLogsGetRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:21596","type":"sequence"}]
 */
class SystemEnhancedCallLogsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isSendEnabled
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21596
     * @var bool|null
     */
    private $isSendEnabled = null;

    /**
     * @ElementName server1NetAddress
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21596
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $server1NetAddress = null;

    /**
     * @ElementName server1SendPort
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21596
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    private $server1SendPort = null;

    /**
     * @ElementName server1RetrievePort
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21596
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    private $server1RetrievePort = null;

    /**
     * @ElementName server2NetAddress
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21596
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $server2NetAddress = null;

    /**
     * @ElementName server2SendPort
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21596
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    private $server2SendPort = null;

    /**
     * @ElementName server2RetrievePort
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21596
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    private $server2RetrievePort = null;

    /**
     * @ElementName sharedSecret
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21596
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $sharedSecret = null;

    /**
     * @ElementName retransmissionDelayMilliSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21596
     * @MinInclusive 200
     * @MaxInclusive 5000
     * @var int|null
     */
    private $retransmissionDelayMilliSeconds = null;

    /**
     * @ElementName maxTransmissions
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21596
     * @MinInclusive 1
     * @MaxInclusive 5
     * @var int|null
     */
    private $maxTransmissions = null;

    /**
     * @ElementName soapTimeoutSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:21596
     * @MinInclusive 1
     * @MaxInclusive 120
     * @var int|null
     */
    private $soapTimeoutSeconds = null;

    /**
     * Getter for isSendEnabled
     *
     * @return bool
     */
    public function getIsSendEnabled()
    {
        return $this->isSendEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isSendEnabled;
    }

    /**
     * Setter for isSendEnabled
     *
     * @param bool $isSendEnabled
     * @return $this
     */
    public function setIsSendEnabled($isSendEnabled)
    {
        $this->isSendEnabled = $isSendEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsSendEnabled()
    {
        $this->isSendEnabled = null;
        return $this;
    }

    /**
     * Getter for server1NetAddress
     *
     * @return string
     */
    public function getServer1NetAddress()
    {
        return $this->server1NetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->server1NetAddress;
    }

    /**
     * Setter for server1NetAddress
     *
     * @param string $server1NetAddress
     * @return $this
     */
    public function setServer1NetAddress($server1NetAddress)
    {
        $this->server1NetAddress = $server1NetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServer1NetAddress()
    {
        $this->server1NetAddress = null;
        return $this;
    }

    /**
     * Getter for server1SendPort
     *
     * @return int
     */
    public function getServer1SendPort()
    {
        return $this->server1SendPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->server1SendPort;
    }

    /**
     * Setter for server1SendPort
     *
     * @param int $server1SendPort
     * @return $this
     */
    public function setServer1SendPort($server1SendPort)
    {
        $this->server1SendPort = $server1SendPort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServer1SendPort()
    {
        $this->server1SendPort = null;
        return $this;
    }

    /**
     * Getter for server1RetrievePort
     *
     * @return int
     */
    public function getServer1RetrievePort()
    {
        return $this->server1RetrievePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->server1RetrievePort;
    }

    /**
     * Setter for server1RetrievePort
     *
     * @param int $server1RetrievePort
     * @return $this
     */
    public function setServer1RetrievePort($server1RetrievePort)
    {
        $this->server1RetrievePort = $server1RetrievePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServer1RetrievePort()
    {
        $this->server1RetrievePort = null;
        return $this;
    }

    /**
     * Getter for server2NetAddress
     *
     * @return string
     */
    public function getServer2NetAddress()
    {
        return $this->server2NetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->server2NetAddress;
    }

    /**
     * Setter for server2NetAddress
     *
     * @param string $server2NetAddress
     * @return $this
     */
    public function setServer2NetAddress($server2NetAddress)
    {
        $this->server2NetAddress = $server2NetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServer2NetAddress()
    {
        $this->server2NetAddress = null;
        return $this;
    }

    /**
     * Getter for server2SendPort
     *
     * @return int
     */
    public function getServer2SendPort()
    {
        return $this->server2SendPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->server2SendPort;
    }

    /**
     * Setter for server2SendPort
     *
     * @param int $server2SendPort
     * @return $this
     */
    public function setServer2SendPort($server2SendPort)
    {
        $this->server2SendPort = $server2SendPort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServer2SendPort()
    {
        $this->server2SendPort = null;
        return $this;
    }

    /**
     * Getter for server2RetrievePort
     *
     * @return int
     */
    public function getServer2RetrievePort()
    {
        return $this->server2RetrievePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->server2RetrievePort;
    }

    /**
     * Setter for server2RetrievePort
     *
     * @param int $server2RetrievePort
     * @return $this
     */
    public function setServer2RetrievePort($server2RetrievePort)
    {
        $this->server2RetrievePort = $server2RetrievePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServer2RetrievePort()
    {
        $this->server2RetrievePort = null;
        return $this;
    }

    /**
     * Getter for sharedSecret
     *
     * @return string
     */
    public function getSharedSecret()
    {
        return $this->sharedSecret instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sharedSecret;
    }

    /**
     * Setter for sharedSecret
     *
     * @param string $sharedSecret
     * @return $this
     */
    public function setSharedSecret($sharedSecret)
    {
        $this->sharedSecret = $sharedSecret;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSharedSecret()
    {
        $this->sharedSecret = null;
        return $this;
    }

    /**
     * Getter for retransmissionDelayMilliSeconds
     *
     * @return int
     */
    public function getRetransmissionDelayMilliSeconds()
    {
        return $this->retransmissionDelayMilliSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->retransmissionDelayMilliSeconds;
    }

    /**
     * Setter for retransmissionDelayMilliSeconds
     *
     * @param int $retransmissionDelayMilliSeconds
     * @return $this
     */
    public function setRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds)
    {
        $this->retransmissionDelayMilliSeconds = $retransmissionDelayMilliSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRetransmissionDelayMilliSeconds()
    {
        $this->retransmissionDelayMilliSeconds = null;
        return $this;
    }

    /**
     * Getter for maxTransmissions
     *
     * @return int
     */
    public function getMaxTransmissions()
    {
        return $this->maxTransmissions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxTransmissions;
    }

    /**
     * Setter for maxTransmissions
     *
     * @param int $maxTransmissions
     * @return $this
     */
    public function setMaxTransmissions($maxTransmissions)
    {
        $this->maxTransmissions = $maxTransmissions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxTransmissions()
    {
        $this->maxTransmissions = null;
        return $this;
    }

    /**
     * Getter for soapTimeoutSeconds
     *
     * @return int
     */
    public function getSoapTimeoutSeconds()
    {
        return $this->soapTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->soapTimeoutSeconds;
    }

    /**
     * Setter for soapTimeoutSeconds
     *
     * @param int $soapTimeoutSeconds
     * @return $this
     */
    public function setSoapTimeoutSeconds($soapTimeoutSeconds)
    {
        $this->soapTimeoutSeconds = $soapTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSoapTimeoutSeconds()
    {
        $this->soapTimeoutSeconds = null;
        return $this;
    }


}

