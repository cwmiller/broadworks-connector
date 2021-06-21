<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemASRParametersGetResponse14sp5
 *
 * Response to SystemASRParametersGetRequest14sp5.
 *         Contains a list of system Application Server Registration parameters.
 *
 * @see SystemASRParametersGetRequest14sp5
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:19838","type":"sequence"}]
 */
class SystemASRParametersGetResponse14sp5 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maxTransmissions
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19838
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    private $maxTransmissions = null;

    /**
     * @ElementName retransmissionDelayMilliSeconds
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19838
     * @MinInclusive 100
     * @MaxInclusive 2000
     * @var int|null
     */
    private $retransmissionDelayMilliSeconds = null;

    /**
     * @ElementName listeningPort
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19838
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    private $listeningPort = null;

    /**
     * @ElementName sourceAddress
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19838
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $sourceAddress = null;

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
     * Getter for listeningPort
     *
     * @return int
     */
    public function getListeningPort()
    {
        return $this->listeningPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listeningPort;
    }

    /**
     * Setter for listeningPort
     *
     * @param int $listeningPort
     * @return $this
     */
    public function setListeningPort($listeningPort)
    {
        $this->listeningPort = $listeningPort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetListeningPort()
    {
        $this->listeningPort = null;
        return $this;
    }

    /**
     * Getter for sourceAddress
     *
     * @return string
     */
    public function getSourceAddress()
    {
        return $this->sourceAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sourceAddress;
    }

    /**
     * Setter for sourceAddress
     *
     * @param string $sourceAddress
     * @return $this
     */
    public function setSourceAddress($sourceAddress)
    {
        $this->sourceAddress = $sourceAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSourceAddress()
    {
        $this->sourceAddress = null;
        return $this;
    }


}

