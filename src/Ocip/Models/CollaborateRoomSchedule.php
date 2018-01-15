<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CollaborateRoomSchedule
 *
 * Collaborate room schedule.
 */
class CollaborateRoomSchedule
{

    /**
     * @ElementName scheduleReservationless
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule\ScheduleReservationless|null
     */
    private $scheduleReservationless = null;

    /**
     * @ElementName scheduleOneTime
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule\ScheduleOneTime|null
     */
    private $scheduleOneTime = null;

    /**
     * @ElementName scheduleRecurring
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule\ScheduleRecurring|null
     */
    private $scheduleRecurring = null;

    /**
     * Getter for scheduleReservationless
     *
     * @ElementName scheduleReservationless
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule\ScheduleReservationless|null
     */
    public function getScheduleReservationless()
    {
        return $this->scheduleReservationless;
    }

    /**
     * Setter for scheduleReservationless
     *
     * @ElementName scheduleReservationless
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule\ScheduleReservationless|null $scheduleReservationless
     * @return $this
     */
    public function setScheduleReservationless($scheduleReservationless)
    {
        $this->scheduleReservationless = $scheduleReservationless;
        return $this;
    }

    /**
     * Getter for scheduleOneTime
     *
     * @ElementName scheduleOneTime
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule\ScheduleOneTime|null
     */
    public function getScheduleOneTime()
    {
        return $this->scheduleOneTime;
    }

    /**
     * Setter for scheduleOneTime
     *
     * @ElementName scheduleOneTime
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule\ScheduleOneTime|null $scheduleOneTime
     * @return $this
     */
    public function setScheduleOneTime($scheduleOneTime)
    {
        $this->scheduleOneTime = $scheduleOneTime;
        return $this;
    }

    /**
     * Getter for scheduleRecurring
     *
     * @ElementName scheduleRecurring
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule\ScheduleRecurring|null
     */
    public function getScheduleRecurring()
    {
        return $this->scheduleRecurring;
    }

    /**
     * Setter for scheduleRecurring
     *
     * @ElementName scheduleRecurring
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule\ScheduleRecurring|null $scheduleRecurring
     * @return $this
     */
    public function setScheduleRecurring($scheduleRecurring)
    {
        $this->scheduleRecurring = $scheduleRecurring;
        return $this;
    }


}

