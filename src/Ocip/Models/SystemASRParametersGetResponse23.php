<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemASRParametersGetResponse23
 *
 * Response to SystemASRParametersGetRequest23.
 *         Contains a list of system Application Server Registration parameters.
 *         
 *         The following elements are only used in AS data mode:
 *           enableCustomMessageControl, value "false" is returned in XS data mode
 *           customNumberOfUsersPerMessage, value "10" is returned in XS data mode
 *           customMessageIntervalMilliseconds, value "100000" is returned in XS data mode
 *
 * @see SystemASRParametersGetRequest23
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:1952","type":"sequence"}]
 */
class SystemASRParametersGetResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maxTransmissions
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1952
     * @var int|null
     */
    private $maxTransmissions = null;

    /**
     * @ElementName retransmissionDelayMilliSeconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1952
     * @var int|null
     */
    private $retransmissionDelayMilliSeconds = null;

    /**
     * @ElementName listeningPort
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1952
     * @var int|null
     */
    private $listeningPort = null;

    /**
     * @ElementName enableCustomMessageControl
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1952
     * @var bool|null
     */
    private $enableCustomMessageControl = null;

    /**
     * @ElementName customNumberOfUsersPerMessage
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1952
     * @var int|null
     */
    private $customNumberOfUsersPerMessage = null;

    /**
     * @ElementName customMessageIntervalMilliseconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1952
     * @var int|null
     */
    private $customMessageIntervalMilliseconds = null;

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

