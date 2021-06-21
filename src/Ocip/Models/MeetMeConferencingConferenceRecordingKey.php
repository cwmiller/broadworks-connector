<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MeetMeConferencingConferenceRecordingKey
 *
 * Identifier for conference recording. startTime is the recording start timestamp.
 *
 * @Groups [{"id":"0fd24121d16995c994d40bc408dbcfa5:957","type":"sequence"}]
 */
class MeetMeConferencingConferenceRecordingKey
{

    /**
     * @ElementName bridgeId
     * @Type string
     * @Group 0fd24121d16995c994d40bc408dbcfa5:957
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $bridgeId = null;

    /**
     * @ElementName conferenceId
     * @Type string
     * @Group 0fd24121d16995c994d40bc408dbcfa5:957
     * @MinLength 6
     * @MaxLength 12
     * @var string|null
     */
    private $conferenceId = null;

    /**
     * @ElementName startTime
     * @Type string
     * @Group 0fd24121d16995c994d40bc408dbcfa5:957
     * @var string|null
     */
    private $startTime = null;

    /**
     * Getter for bridgeId
     *
     * @return string
     */
    public function getBridgeId()
    {
        return $this->bridgeId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->bridgeId;
    }

    /**
     * Setter for bridgeId
     *
     * @param string $bridgeId
     * @return $this
     */
    public function setBridgeId($bridgeId)
    {
        $this->bridgeId = $bridgeId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBridgeId()
    {
        $this->bridgeId = null;
        return $this;
    }

    /**
     * Getter for conferenceId
     *
     * @return string
     */
    public function getConferenceId()
    {
        return $this->conferenceId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceId;
    }

    /**
     * Setter for conferenceId
     *
     * @param string $conferenceId
     * @return $this
     */
    public function setConferenceId($conferenceId)
    {
        $this->conferenceId = $conferenceId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceId()
    {
        $this->conferenceId = null;
        return $this;
    }

    /**
     * Getter for startTime
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->startTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startTime;
    }

    /**
     * Setter for startTime
     *
     * @param string $startTime
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartTime()
    {
        $this->startTime = null;
        return $this;
    }


}

