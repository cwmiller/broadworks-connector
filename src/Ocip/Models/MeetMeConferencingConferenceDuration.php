<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MeetMeConferencingConferenceDuration
 *
 * Conference duration.
 */
class MeetMeConferencingConferenceDuration
{

    /**
     * @ElementName hours
     * @Type int
     * @var int|null
     */
    private $hours = null;

    /**
     * @ElementName minutes
     * @Type int
     * @var int|null
     */
    private $minutes = null;

    /**
     * Getter for hours
     *
     * @return int
     */
    public function getHours()
    {
        return $this->hours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hours;
    }

    /**
     * Setter for hours
     *
     * @param int $hours
     * @return $this
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHours()
    {
        $this->hours = null;
        return $this;
    }

    /**
     * Getter for minutes
     *
     * @return int
     */
    public function getMinutes()
    {
        return $this->minutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minutes;
    }

    /**
     * Setter for minutes
     *
     * @param int $minutes
     * @return $this
     */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinutes()
    {
        $this->minutes = null;
        return $this;
    }


}

