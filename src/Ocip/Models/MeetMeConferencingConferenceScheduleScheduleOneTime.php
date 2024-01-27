<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MeetMeConferencingConferenceScheduleScheduleOneTime
 *
 * @Groups [{"id":"adf25df72505d1c476ebb480b6cce18d:984","type":"sequence"}]
 */
class MeetMeConferencingConferenceScheduleScheduleOneTime
{
    /**
     * @ElementName startTime
     * @Type string
     * @Group adf25df72505d1c476ebb480b6cce18d:984
     * @var string|null
     */
    protected $startTime = null;

    /**
     * @ElementName duration
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration
     * @Group adf25df72505d1c476ebb480b6cce18d:984
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null
     */
    protected $duration = null;

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

    /**
     * Getter for duration
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration
     */
    public function getDuration()
    {
        return $this->duration instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->duration;
    }

    /**
     * Setter for duration
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration $duration
     * @return $this
     */
    public function setDuration(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDuration()
    {
        $this->duration = null;
        return $this;
    }
}

