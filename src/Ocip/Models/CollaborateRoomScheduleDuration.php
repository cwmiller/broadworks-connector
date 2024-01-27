<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CollaborateRoomScheduleDuration
 *
 * Collaborate room schedule duration.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:1225","type":"sequence"}]
 */
class CollaborateRoomScheduleDuration
{
    /**
     * @ElementName hours
     * @Type int
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1225
     * @MinInclusive 0
     * @MaxInclusive 23
     * @var int|null
     */
    protected $hours = null;

    /**
     * @ElementName minutes
     * @Type int
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1225
     * @Pattern 0|15|30|45
     * @var int|null
     */
    protected $minutes = null;

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

