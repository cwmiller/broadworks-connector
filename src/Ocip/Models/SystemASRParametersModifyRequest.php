<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemASRParametersModifyRequest
 *
 * Request to modify Application Server Registration system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemASRParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName maxTransmissions
     * @var int|null
     */
    private $maxTransmissions = null;

    /**
     * @ElementName retransmissionDelayMilliSeconds
     * @var int|null
     */
    private $retransmissionDelayMilliSeconds = null;

    /**
     * @ElementName listeningPort
     * @var int|null
     */
    private $listeningPort = null;

    /**
     * @ElementName sourceAddress
     * @var string|null
     */
    private $sourceAddress = null;

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
     * Getter for listeningPort
     *
     * @ElementName listeningPort
     * @return int|null
     */
    public function getListeningPort()
    {
        return $this->listeningPort;
    }

    /**
     * Setter for listeningPort
     *
     * @ElementName listeningPort
     * @param int|null $listeningPort
     * @return $this
     */
    public function setListeningPort($listeningPort)
    {
        $this->listeningPort = $listeningPort;
        return $this;
    }

    /**
     * Getter for sourceAddress
     *
     * @ElementName sourceAddress
     * @return string|null
     */
    public function getSourceAddress()
    {
        return $this->sourceAddress;
    }

    /**
     * Setter for sourceAddress
     *
     * @ElementName sourceAddress
     * @param string|null $sourceAddress
     * @return $this
     */
    public function setSourceAddress($sourceAddress)
    {
        $this->sourceAddress = $sourceAddress;
        return $this;
    }


}

