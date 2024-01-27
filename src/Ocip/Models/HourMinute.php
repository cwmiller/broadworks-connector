<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * HourMinute
 *
 * Represents a specific time with hour and minute granularity
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:3410","type":"sequence"}]
 */
class HourMinute
{
    /**
     * @ElementName hour
     * @Type int
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3410
     * @MinInclusive 0
     * @MaxInclusive 23
     * @var int|null
     */
    protected $hour = null;

    /**
     * @ElementName minute
     * @Type int
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3410
     * @MinInclusive 0
     * @MaxInclusive 59
     * @var int|null
     */
    protected $minute = null;

    /**
     * Getter for hour
     *
     * @return int
     */
    public function getHour()
    {
        return $this->hour instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hour;
    }

    /**
     * Setter for hour
     *
     * @param int $hour
     * @return $this
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHour()
    {
        $this->hour = null;
        return $this;
    }

    /**
     * Getter for minute
     *
     * @return int
     */
    public function getMinute()
    {
        return $this->minute instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minute;
    }

    /**
     * Setter for minute
     *
     * @param int $minute
     * @return $this
     */
    public function setMinute($minute)
    {
        $this->minute = $minute;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinute()
    {
        $this->minute = null;
        return $this;
    }
}

