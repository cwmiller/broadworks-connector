<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemASRParametersGetResponse14sp7
 *
 * Response to SystemASRParametersGetRequest14sp7.
 *         Contains a list of system Application Server Registration parameters.
 *         
 *         Replaced by: SystemASRParametersGetResponse23 in AS data mode.
 *
 * @see SystemASRParametersGetRequest14sp7
 * @see SystemASRParametersGetResponse23
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:6918","type":"sequence"}]
 */
class SystemASRParametersGetResponse14sp7 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maxTransmissions
     * @Type int
     * @Group de4d76f01f337fe4694212ec9f771753:6918
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $maxTransmissions = null;

    /**
     * @ElementName retransmissionDelayMilliSeconds
     * @Type int
     * @Group de4d76f01f337fe4694212ec9f771753:6918
     * @MinInclusive 100
     * @MaxInclusive 2000
     * @var int|null
     */
    protected $retransmissionDelayMilliSeconds = null;

    /**
     * @ElementName listeningPort
     * @Type int
     * @Group de4d76f01f337fe4694212ec9f771753:6918
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $listeningPort = null;

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


}

