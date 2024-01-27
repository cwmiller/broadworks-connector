<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CollaborateRoomScheduleScheduleOneTime
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:1199","type":"sequence"}]
 */
class CollaborateRoomScheduleScheduleOneTime
{
    /**
     * @ElementName startTime
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1199
     * @var string|null
     */
    protected $startTime = null;

    /**
     * @ElementName duration
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleDuration
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1199
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleDuration|null
     */
    protected $duration = null;

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
     * Getter for duration
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleDuration
     */
    public function getDuration()
    {
        return $this->duration instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->duration;
    }

    /**
     * Setter for duration
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleDuration $duration
     * @return $this
     */
    public function setDuration(\CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomScheduleDuration $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDuration()
    {
        $this->duration = null;
        return $this;
    }
}

