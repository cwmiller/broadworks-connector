<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CollaborateRoomScheduleScheduleReservationless
 */
class CollaborateRoomScheduleScheduleReservationless
{

    /**
     * @ElementName startTime
     * @var string|null
     */
    private $startTime = null;

    /**
     * @ElementName endTime
     * @var string|null
     */
    private $endTime = null;

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
     * Getter for endTime
     *
     * @ElementName endTime
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Setter for endTime
     *
     * @ElementName endTime
     * @param string|null $endTime
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }


}

