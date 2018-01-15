<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * HourMinute
 *
 * Represents a specific time with hour and minute granularity
 */
class HourMinute
{

    /**
     * @ElementName hour
     * @var int|null
     */
    private $hour = null;

    /**
     * @ElementName minute
     * @var int|null
     */
    private $minute = null;

    /**
     * Getter for hour
     *
     * @ElementName hour
     * @return int|null
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Setter for hour
     *
     * @ElementName hour
     * @param int|null $hour
     * @return $this
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
        return $this;
    }

    /**
     * Getter for minute
     *
     * @ElementName minute
     * @return int|null
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * Setter for minute
     *
     * @ElementName minute
     * @param int|null $minute
     * @return $this
     */
    public function setMinute($minute)
    {
        $this->minute = $minute;
        return $this;
    }


}

