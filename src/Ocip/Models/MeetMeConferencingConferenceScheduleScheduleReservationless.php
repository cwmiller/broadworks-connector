<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MeetMeConferencingConferenceScheduleScheduleReservationless
 *
 * @Groups [{"id":"e51a0a16349851c3fad768a24a35838d:924","type":"sequence"}]
 */
class MeetMeConferencingConferenceScheduleScheduleReservationless
{

    /**
     * @ElementName startTime
     * @Type string
     * @Group e51a0a16349851c3fad768a24a35838d:924
     * @var string|null
     */
    private $startTime = null;

    /**
     * @ElementName endTime
     * @Type string
     * @Nillable
     * @Group e51a0a16349851c3fad768a24a35838d:924
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $endTime = null;

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
     * Getter for endTime
     *
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->endTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endTime;
    }

    /**
     * Setter for endTime
     *
     * @param string|null $endTime
     * @return $this
     */
    public function setEndTime($endTime)
    {
        if ($endTime === null) {
            $this->endTime = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->endTime = $endTime;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndTime()
    {
        $this->endTime = null;
        return $this;
    }


}

