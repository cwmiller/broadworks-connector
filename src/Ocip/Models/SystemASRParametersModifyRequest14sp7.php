<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemASRParametersModifyRequest14sp7
 *
 * Request to modify Application Server Registration system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           enableCustomMessageControl
 *           customNumberOfUsersPerMessage
 *           customMessageIntervalMilliseconds
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:2423","type":"sequence"}]
 */
class SystemASRParametersModifyRequest14sp7 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName maxTransmissions
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2423
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $maxTransmissions = null;

    /**
     * @ElementName retransmissionDelayMilliSeconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2423
     * @MinInclusive 100
     * @MaxInclusive 2000
     * @var int|null
     */
    protected $retransmissionDelayMilliSeconds = null;

    /**
     * @ElementName listeningPort
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2423
     * @MinInclusive 1025
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $listeningPort = null;

    /**
     * @ElementName enableCustomMessageControl
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2423
     * @var bool|null
     */
    protected $enableCustomMessageControl = null;

    /**
     * @ElementName customNumberOfUsersPerMessage
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2423
     * @MinInclusive 1
     * @MaxInclusive 20
     * @var int|null
     */
    protected $customNumberOfUsersPerMessage = null;

    /**
     * @ElementName customMessageIntervalMilliseconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:2423
     * @MinInclusive 50
     * @MaxInclusive 1000
     * @var int|null
     */
    protected $customMessageIntervalMilliseconds = null;

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
     * Getter for enableCustomMessageControl
     *
     * @return bool
     */
    public function getEnableCustomMessageControl()
    {
        return $this->enableCustomMessageControl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCustomMessageControl;
    }

    /**
     * Setter for enableCustomMessageControl
     *
     * @param bool $enableCustomMessageControl
     * @return $this
     */
    public function setEnableCustomMessageControl($enableCustomMessageControl)
    {
        $this->enableCustomMessageControl = $enableCustomMessageControl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCustomMessageControl()
    {
        $this->enableCustomMessageControl = null;
        return $this;
    }

    /**
     * Getter for customNumberOfUsersPerMessage
     *
     * @return int
     */
    public function getCustomNumberOfUsersPerMessage()
    {
        return $this->customNumberOfUsersPerMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->customNumberOfUsersPerMessage;
    }

    /**
     * Setter for customNumberOfUsersPerMessage
     *
     * @param int $customNumberOfUsersPerMessage
     * @return $this
     */
    public function setCustomNumberOfUsersPerMessage($customNumberOfUsersPerMessage)
    {
        $this->customNumberOfUsersPerMessage = $customNumberOfUsersPerMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCustomNumberOfUsersPerMessage()
    {
        $this->customNumberOfUsersPerMessage = null;
        return $this;
    }

    /**
     * Getter for customMessageIntervalMilliseconds
     *
     * @return int
     */
    public function getCustomMessageIntervalMilliseconds()
    {
        return $this->customMessageIntervalMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->customMessageIntervalMilliseconds;
    }

    /**
     * Setter for customMessageIntervalMilliseconds
     *
     * @param int $customMessageIntervalMilliseconds
     * @return $this
     */
    public function setCustomMessageIntervalMilliseconds($customMessageIntervalMilliseconds)
    {
        $this->customMessageIntervalMilliseconds = $customMessageIntervalMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCustomMessageIntervalMilliseconds()
    {
        $this->customMessageIntervalMilliseconds = null;
        return $this;
    }


}

