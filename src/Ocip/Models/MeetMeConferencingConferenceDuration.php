<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MeetMeConferencingConferenceDuration
 *
 * Conference duration.
 *
 * @Groups [{"id":"7a29c84abb8473449085e6657fc6948d:874","type":"sequence"}]
 */
class MeetMeConferencingConferenceDuration
{

    /**
     * @ElementName hours
     * @Type int
     * @Group 7a29c84abb8473449085e6657fc6948d:874
     * @var int|null
     */
    private $hours = null;

    /**
     * @ElementName minutes
     * @Type int
     * @Group 7a29c84abb8473449085e6657fc6948d:874
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

