<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MeetMeConferencingConferenceScheduleScheduleRecurring
 *
 * @Groups [{"id":"adf25df72505d1c476ebb480b6cce18d:993","type":"sequence"}]
 */
class MeetMeConferencingConferenceScheduleScheduleRecurring
{
    /**
     * @ElementName startTime
     * @Type string
     * @Group adf25df72505d1c476ebb480b6cce18d:993
     * @var string|null
     */
    protected $startTime = null;

    /**
     * @ElementName duration
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration
     * @Group adf25df72505d1c476ebb480b6cce18d:993
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null
     */
    protected $duration = null;

    /**
     * @ElementName recurrence
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Recurrence
     * @Group adf25df72505d1c476ebb480b6cce18d:993
     * @var \CWM\BroadWorksConnector\Ocip\Models\Recurrence|null
     */
    protected $recurrence = null;

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

    /**
     * Getter for recurrence
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Recurrence
     */
    public function getRecurrence()
    {
        return $this->recurrence instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recurrence;
    }

    /**
     * Setter for recurrence
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Recurrence $recurrence
     * @return $this
     */
    public function setRecurrence(\CWM\BroadWorksConnector\Ocip\Models\Recurrence $recurrence)
    {
        $this->recurrence = $recurrence;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecurrence()
    {
        $this->recurrence = null;
        return $this;
    }
}

