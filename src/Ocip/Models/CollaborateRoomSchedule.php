<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CollaborateRoomSchedule
 *
 * Collaborate room schedule.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:786","type":"sequence","children":[{"id":"8e629edbac315ae7889caca732382c44:787","type":"choice"}]}]
 */
class CollaborateRoomSchedule
{

    /**
     * @ElementName scheduleReservationless
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleReservationless
     * @Group 8e629edbac315ae7889caca732382c44:787
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleReservationless|null
     */
    private $scheduleReservationless = null;

    /**
     * @ElementName scheduleOneTime
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleOneTime
     * @Group 8e629edbac315ae7889caca732382c44:787
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleOneTime|null
     */
    private $scheduleOneTime = null;

    /**
     * @ElementName scheduleRecurring
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleRecurring
     * @Group 8e629edbac315ae7889caca732382c44:787
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleRecurring|null
     */
    private $scheduleRecurring = null;

    /**
     * Getter for scheduleReservationless
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleReservationless
     */
    public function getScheduleReservationless()
    {
        return $this->scheduleReservationless instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleReservationless;
    }

    /**
     * Setter for scheduleReservationless
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleReservationless $scheduleReservationless
     * @return $this
     */
    public function setScheduleReservationless(\CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleReservationless $scheduleReservationless)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleOneTime
     */
    public function getScheduleOneTime()
    {
        return $this->scheduleOneTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleOneTime;
    }

    /**
     * Setter for scheduleOneTime
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleOneTime $scheduleOneTime
     * @return $this
     */
    public function setScheduleOneTime(\CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleOneTime $scheduleOneTime)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleRecurring
     */
    public function getScheduleRecurring()
    {
        return $this->scheduleRecurring instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleRecurring;
    }

    /**
     * Setter for scheduleRecurring
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleRecurring $scheduleRecurring
     * @return $this
     */
    public function setScheduleRecurring(\CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleScheduleRecurring $scheduleRecurring)
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

