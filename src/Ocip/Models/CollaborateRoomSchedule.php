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
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleReservationless|null
     */
    private $scheduleReservationless = null;

    /**
     * @ElementName scheduleOneTime
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleOneTime|null
     */
    private $scheduleOneTime = null;

    /**
     * @ElementName scheduleRecurring
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleRecurring|null
     */
    private $scheduleRecurring = null;

    /**
     * Getter for scheduleReservationless
     *
     * @ElementName scheduleReservationless
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleReservationless|null
     */
    public function getScheduleReservationless()
    {
        return $this->scheduleReservationless;
    }

    /**
     * Setter for scheduleReservationless
     *
     * @ElementName scheduleReservationless
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleReservationless|null $scheduleReservationless
     * @return $this
     */
    public function setScheduleReservationless(\CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleReservationless $scheduleReservationless)
    {
        $this->scheduleReservationless = $scheduleReservationless;
        return $this;
    }

    /**
     * Getter for scheduleOneTime
     *
     * @ElementName scheduleOneTime
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleOneTime|null
     */
    public function getScheduleOneTime()
    {
        return $this->scheduleOneTime;
    }

    /**
     * Setter for scheduleOneTime
     *
     * @ElementName scheduleOneTime
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleOneTime|null $scheduleOneTime
     * @return $this
     */
    public function setScheduleOneTime(\CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleOneTime $scheduleOneTime)
    {
        $this->scheduleOneTime = $scheduleOneTime;
        return $this;
    }

    /**
     * Getter for scheduleRecurring
     *
     * @ElementName scheduleRecurring
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleRecurring|null
     */
    public function getScheduleRecurring()
    {
        return $this->scheduleRecurring;
    }

    /**
     * Setter for scheduleRecurring
     *
     * @ElementName scheduleRecurring
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleRecurring|null $scheduleRecurring
     * @return $this
     */
    public function setScheduleRecurring(\CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleRecurring $scheduleRecurring)
    {
        $this->scheduleRecurring = $scheduleRecurring;
        return $this;
    }


}

