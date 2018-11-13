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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleReservationless
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleReservationless|null
     */
    private $scheduleReservationless = null;

    /**
     * @ElementName scheduleOneTime
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleOneTime
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleOneTime|null
     */
    private $scheduleOneTime = null;

    /**
     * @ElementName scheduleRecurring
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleRecurring
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleRecurring|null
     */
    private $scheduleRecurring = null;

    /**
     * Getter for scheduleReservationless
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleReservationless
     */
    public function getScheduleReservationless()
    {
        return $this->scheduleReservationless instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleReservationless;
    }

    /**
     * Setter for scheduleReservationless
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleReservationless $scheduleReservationless
     * @return $this
     */
    public function setScheduleReservationless(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleReservationless $scheduleReservationless)
    {
        $this->scheduleReservationless = $scheduleReservationless;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleReservationless()
    {
        $this->scheduleReservationless = null;
        return $this;
    }

    /**
     * Getter for scheduleOneTime
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleOneTime
     */
    public function getScheduleOneTime()
    {
        return $this->scheduleOneTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleOneTime;
    }

    /**
     * Setter for scheduleOneTime
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleOneTime $scheduleOneTime
     * @return $this
     */
    public function setScheduleOneTime(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleOneTime $scheduleOneTime)
    {
        $this->scheduleOneTime = $scheduleOneTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleOneTime()
    {
        $this->scheduleOneTime = null;
        return $this;
    }

    /**
     * Getter for scheduleRecurring
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleRecurring
     */
    public function getScheduleRecurring()
    {
        return $this->scheduleRecurring instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleRecurring;
    }

    /**
     * Setter for scheduleRecurring
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleRecurring $scheduleRecurring
     * @return $this
     */
    public function setScheduleRecurring(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceScheduleScheduleRecurring $scheduleRecurring)
    {
        $this->scheduleRecurring = $scheduleRecurring;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleRecurring()
    {
        $this->scheduleRecurring = null;
        return $this;
    }


}

