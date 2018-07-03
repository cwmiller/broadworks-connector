<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEnhancedCallLogsGetResponse20sp1
 *
 * Response to SystemEnhancedCallLogsGetRequest20sp1.
 *         The following elements are only used in AS data mode:
 *           isSendEnabled
 *           server1NetAddress
 *           server1SendPort
 *           server1RetrievePort
 *           server2NetAddress
 *           server2SendPort
 *           server2RetrievePort
 *           sharedSecret
 *           retransmissionDelayMilliSeconds
 *           maxTransmissions
 *           soapTimeoutSeconds
 *           useDBS
 *           eclQueryApplicationURL
 *           eclQueryDataRepositoryURL
 *
 * @see SystemEnhancedCallLogsGetRequest20sp1
 */
class SystemEnhancedCallLogsGetResponse20sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isSendEnabled
     * @var bool|null
     */
    private $isSendEnabled = null;

    /**
     * @ElementName server1NetAddress
     * @var string|null
     */
    private $server1NetAddress = null;

    /**
     * @ElementName server1SendPort
     * @var int|null
     */
    private $server1SendPort = null;

    /**
     * @ElementName server1RetrievePort
     * @var int|null
     */
    private $server1RetrievePort = null;

    /**
     * @ElementName server2NetAddress
     * @var string|null
     */
    private $server2NetAddress = null;

    /**
     * @ElementName server2SendPort
     * @var int|null
     */
    private $server2SendPort = null;

    /**
     * @ElementName server2RetrievePort
     * @var int|null
     */
    private $server2RetrievePort = null;

    /**
     * @ElementName sharedSecret
     * @var string|null
     */
    private $sharedSecret = null;

    /**
     * @ElementName retransmissionDelayMilliSeconds
     * @var int|null
     */
    private $retransmissionDelayMilliSeconds = null;

    /**
     * @ElementName maxTransmissions
     * @var int|null
     */
    private $maxTransmissions = null;

    /**
     * @ElementName soapTimeoutSeconds
     * @var int|null
     */
    private $soapTimeoutSeconds = null;

    /**
     * @ElementName useDBS
     * @var bool|null
     */
    private $useDBS = null;

    /**
     * @ElementName maxNonPagedResponseSize
     * @var int|null
     */
    private $maxNonPagedResponseSize = null;

    /**
     * @ElementName eclQueryApplicationURL
     * @var string|null
     */
    private $eclQueryApplicationURL = null;

    /**
     * @ElementName eclQueryDataRepositoryURL
     * @var string|null
     */
    private $eclQueryDataRepositoryURL = null;

    /**
     * Getter for isSendEnabled
     *
     * @ElementName isSendEnabled
     * @return bool|null
     */
    public function getIsSendEnabled()
    {
        return $this->isSendEnabled;
    }

    /**
     * Setter for isSendEnabled
     *
     * @ElementName isSendEnabled
     * @param bool|null $isSendEnabled
     * @return $this
     */
    public function setIsSendEnabled($isSendEnabled)
    {
        $this->isSendEnabled = $isSendEnabled;
        return $this;
    }

    /**
     * Getter for server1NetAddress
     *
     * @ElementName server1NetAddress
     * @return string|null
     */
    public function getServer1NetAddress()
    {
        return $this->server1NetAddress;
    }

    /**
     * Setter for server1NetAddress
     *
     * @ElementName server1NetAddress
     * @param string|null $server1NetAddress
     * @return $this
     */
    public function setServer1NetAddress($server1NetAddress)
    {
        $this->server1NetAddress = $server1NetAddress;
        return $this;
    }

    /**
     * Getter for server1SendPort
     *
     * @ElementName server1SendPort
     * @return int|null
     */
    public function getServer1SendPort()
    {
        return $this->server1SendPort;
    }

    /**
     * Setter for server1SendPort
     *
     * @ElementName server1SendPort
     * @param int|null $server1SendPort
     * @return $this
     */
    public function setServer1SendPort($server1SendPort)
    {
        $this->server1SendPort = $server1SendPort;
        return $this;
    }

    /**
     * Getter for server1RetrievePort
     *
     * @ElementName server1RetrievePort
     * @return int|null
     */
    public function getServer1RetrievePort()
    {
        return $this->server1RetrievePort;
    }

    /**
     * Setter for server1RetrievePort
     *
     * @ElementName server1RetrievePort
     * @param int|null $server1RetrievePort
     * @return $this
     */
    public function setServer1RetrievePort($server1RetrievePort)
    {
        $this->server1RetrievePort = $server1RetrievePort;
        return $this;
    }

    /**
     * Getter for server2NetAddress
     *
     * @ElementName server2NetAddress
     * @return string|null
     */
    public function getServer2NetAddress()
    {
        return $this->server2NetAddress;
    }

    /**
     * Setter for server2NetAddress
     *
     * @ElementName server2NetAddress
     * @param string|null $server2NetAddress
     * @return $this
     */
    public function setServer2NetAddress($server2NetAddress)
    {
        $this->server2NetAddress = $server2NetAddress;
        return $this;
    }

    /**
     * Getter for server2SendPort
     *
     * @ElementName server2SendPort
     * @return int|null
     */
    public function getServer2SendPort()
    {
        return $this->server2SendPort;
    }

    /**
     * Setter for server2SendPort
     *
     * @ElementName server2SendPort
     * @param int|null $server2SendPort
     * @return $this
     */
    public function setServer2SendPort($server2SendPort)
    {
        $this->server2SendPort = $server2SendPort;
        return $this;
    }

    /**
     * Getter for server2RetrievePort
     *
     * @ElementName server2RetrievePort
     * @return int|null
     */
    public function getServer2RetrievePort()
    {
        return $this->server2RetrievePort;
    }

    /**
     * Setter for server2RetrievePort
     *
     * @ElementName server2RetrievePort
     * @param int|null $server2RetrievePort
     * @return $this
     */
    public function setServer2RetrievePort($server2RetrievePort)
    {
        $this->server2RetrievePort = $server2RetrievePort;
        return $this;
    }

    /**
     * Getter for sharedSecret
     *
     * @ElementName sharedSecret
     * @return string|null
     */
    public function getSharedSecret()
    {
        return $this->sharedSecret;
    }

    /**
     * Setter for sharedSecret
     *
     * @ElementName sharedSecret
     * @param string|null $sharedSecret
     * @return $this
     */
    public function setSharedSecret($sharedSecret)
    {
        $this->sharedSecret = $sharedSecret;
        return $this;
    }

    /**
     * Getter for retransmissionDelayMilliSeconds
     *
     * @ElementName retransmissionDelayMilliSeconds
     * @return int|null
     */
    public function getRetransmissionDelayMilliSeconds()
    {
        return $this->retransmissionDelayMilliSeconds;
    }

    /**
     * Setter for retransmissionDelayMilliSeconds
     *
     * @ElementName retransmissionDelayMilliSeconds
     * @param int|null $retransmissionDelayMilliSeconds
     * @return $this
     */
    public function setRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds)
    {
        $this->retransmissionDelayMilliSeconds = $retransmissionDelayMilliSeconds;
        return $this;
    }

    /**
     * Getter for maxTransmissions
     *
     * @ElementName maxTransmissions
     * @return int|null
     */
    public function getMaxTransmissions()
    {
        return $this->maxTransmissions;
    }

    /**
     * Setter for maxTransmissions
     *
     * @ElementName maxTransmissions
     * @param int|null $maxTransmissions
     * @return $this
     */
    public function setMaxTransmissions($maxTransmissions)
    {
        $this->maxTransmissions = $maxTransmissions;
        return $this;
    }

    /**
     * Getter for soapTimeoutSeconds
     *
     * @ElementName soapTimeoutSeconds
     * @return int|null
     */
    public function getSoapTimeoutSeconds()
    {
        return $this->soapTimeoutSeconds;
    }

    /**
     * Setter for soapTimeoutSeconds
     *
     * @ElementName soapTimeoutSeconds
     * @param int|null $soapTimeoutSeconds
     * @return $this
     */
    public function setSoapTimeoutSeconds($soapTimeoutSeconds)
    {
        $this->soapTimeoutSeconds = $soapTimeoutSeconds;
        return $this;
    }

    /**
     * Getter for useDBS
     *
     * @ElementName useDBS
     * @return bool|null
     */
    public function getUseDBS()
    {
        return $this->useDBS;
    }

    /**
     * Setter for useDBS
     *
     * @ElementName useDBS
     * @param bool|null $useDBS
     * @return $this
     */
    public function setUseDBS($useDBS)
    {
        $this->useDBS = $useDBS;
        return $this;
    }

    /**
     * Getter for maxNonPagedResponseSize
     *
     * @ElementName maxNonPagedResponseSize
     * @return int|null
     */
    public function getMaxNonPagedResponseSize()
    {
        return $this->maxNonPagedResponseSize;
    }

    /**
     * Setter for maxNonPagedResponseSize
     *
     * @ElementName maxNonPagedResponseSize
     * @param int|null $maxNonPagedResponseSize
     * @return $this
     */
    public function setMaxNonPagedResponseSize($maxNonPagedResponseSize)
    {
        $this->maxNonPagedResponseSize = $maxNonPagedResponseSize;
        return $this;
    }

    /**
     * Getter for eclQueryApplicationURL
     *
     * @ElementName eclQueryApplicationURL
     * @return string|null
     */
    public function getEclQueryApplicationURL()
    {
        return $this->eclQueryApplicationURL;
    }

    /**
     * Setter for eclQueryApplicationURL
     *
     * @ElementName eclQueryApplicationURL
     * @param string|null $eclQueryApplicationURL
     * @return $this
     */
    public function setEclQueryApplicationURL($eclQueryApplicationURL)
    {
        $this->eclQueryApplicationURL = $eclQueryApplicationURL;
        return $this;
    }

    /**
     * Getter for eclQueryDataRepositoryURL
     *
     * @ElementName eclQueryDataRepositoryURL
     * @return string|null
     */
    public function getEclQueryDataRepositoryURL()
    {
        return $this->eclQueryDataRepositoryURL;
    }

    /**
     * Setter for eclQueryDataRepositoryURL
     *
     * @ElementName eclQueryDataRepositoryURL
     * @param string|null $eclQueryDataRepositoryURL
     * @return $this
     */
    public function setEclQueryDataRepositoryURL($eclQueryDataRepositoryURL)
    {
        $this->eclQueryDataRepositoryURL = $eclQueryDataRepositoryURL;
        return $this;
    }


}

