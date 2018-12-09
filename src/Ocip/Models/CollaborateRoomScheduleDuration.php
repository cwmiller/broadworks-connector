<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CollaborateRoomScheduleDuration
 *
 * Collaborate room schedule duration.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:826","type":"sequence"}]
 */
class CollaborateRoomScheduleDuration
{

    /**
     * @ElementName hours
     * @Type int
     * @Group 8e629edbac315ae7889caca732382c44:826
     * @var int|null
     */
    private $hours = null;

    /**
     * @ElementName minutes
     * @Type int
     * @Group 8e629edbac315ae7889caca732382c44:826
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

