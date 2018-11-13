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
     * @Type int
     * @var int|null
     */
    private $maxTransmissions = null;

    /**
     * @ElementName retransmissionDelayMilliSeconds
     * @Type int
     * @var int|null
     */
    private $retransmissionDelayMilliSeconds = null;

    /**
     * @ElementName listeningPort
     * @Type int
     * @var int|null
     */
    private $listeningPort = null;

    /**
     * @ElementName sourceAddress
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @return string|null
     */
    public function getSourceAddress()
    {
        return $this->sourceAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sourceAddress;
    }

    /**
     * Setter for sourceAddress
     *
     * @param string|null $sourceAddress
     * @return $this
     */
    public function setSourceAddress($sourceAddress)
    {
        if ($sourceAddress === null) {
            $this->sourceAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->sourceAddress = $sourceAddress;
        }
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

