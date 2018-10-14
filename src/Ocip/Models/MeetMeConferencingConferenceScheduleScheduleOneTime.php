<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MeetMeConferencingConferenceScheduleScheduleOneTime
 */
class MeetMeConferencingConferenceScheduleScheduleOneTime
{

    /**
     * @ElementName startTime
     * @var string|null
     */
    private $startTime = null;

    /**
     * @ElementName duration
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null
     */
    private $duration = null;

    /**
     * Getter for startTime
     *
     * @ElementName startTime
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Setter for startTime
     *
     * @ElementName startTime
     * @param string|null $startTime
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Getter for duration
     *
     * @ElementName duration
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Setter for duration
     *
     * @ElementName duration
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null $duration
     * @return $this
     */
    public function setDuration(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration $duration)
    {
        $this->duration = $duration;
        return $this;
    }


}

