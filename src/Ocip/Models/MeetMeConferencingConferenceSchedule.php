<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MeetMeConferencingConferenceSchedule
 *
 * Conference schedule.
 */
class MeetMeConferencingConferenceSchedule
{

    /**
     * @ElementName scheduleReservationless
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleReservationless|null
     */
    private $scheduleReservationless = null;

    /**
     * @ElementName scheduleOneTime
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleOneTime|null
     */
    private $scheduleOneTime = null;

    /**
     * @ElementName scheduleRecurring
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleRecurring|null
     */
    private $scheduleRecurring = null;

    /**
     * Getter for scheduleReservationless
     *
     * @ElementName scheduleReservationless
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleReservationless|null
     */
    public function getScheduleReservationless()
    {
        return $this->scheduleReservationless;
    }

    /**
     * Setter for scheduleReservationless
     *
     * @ElementName scheduleReservationless
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleReservationless|null $scheduleReservationless
     * @return $this
     */
    public function setScheduleReservationless(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleReservationless $scheduleReservationless)
    {
        $this->scheduleReservationless = $scheduleReservationless;
        return $this;
    }

    /**
     * Getter for scheduleOneTime
     *
     * @ElementName scheduleOneTime
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleOneTime|null
     */
    public function getScheduleOneTime()
    {
        return $this->scheduleOneTime;
    }

    /**
     * Setter for scheduleOneTime
     *
     * @ElementName scheduleOneTime
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleOneTime|null $scheduleOneTime
     * @return $this
     */
    public function setScheduleOneTime(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleOneTime $scheduleOneTime)
    {
        $this->scheduleOneTime = $scheduleOneTime;
        return $this;
    }

    /**
     * Getter for scheduleRecurring
     *
     * @ElementName scheduleRecurring
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleRecurring|null
     */
    public function getScheduleRecurring()
    {
        return $this->scheduleRecurring;
    }

    /**
     * Setter for scheduleRecurring
     *
     * @ElementName scheduleRecurring
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleRecurring|null $scheduleRecurring
     * @return $this
     */
    public function setScheduleRecurring(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleRecurring $scheduleRecurring)
    {
        $this->scheduleRecurring = $scheduleRecurring;
        return $this;
    }


}

