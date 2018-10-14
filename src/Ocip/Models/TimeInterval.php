<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TimeInterval
 *
 * Time Interval.
 */
class TimeInterval
{

    /**
     * @ElementName startDayOfWeek
     * @var \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null
     */
    private $startDayOfWeek = null;

    /**
     * @ElementName startHour
     * @var int|null
     */
    private $startHour = null;

    /**
     * @ElementName startMinute
     * @var int|null
     */
    private $startMinute = null;

    /**
     * @ElementName endDayOfWeek
     * @var \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null
     */
    private $endDayOfWeek = null;

    /**
     * @ElementName endHour
     * @var int|null
     */
    private $endHour = null;

    /**
     * @ElementName endMinute
     * @var int|null
     */
    private $endMinute = null;

    /**
     * Getter for startDayOfWeek
     *
     * @ElementName startDayOfWeek
     * @return \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null
     */
    public function getStartDayOfWeek()
    {
        return $this->startDayOfWeek;
    }

    /**
     * Setter for startDayOfWeek
     *
     * @ElementName startDayOfWeek
     * @param \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null $startDayOfWeek
     * @return $this
     */
    public function setStartDayOfWeek(\CWM\BroadWorksConnector\Ocip\Models\DayOfWeek $startDayOfWeek)
    {
        $this->startDayOfWeek = $startDayOfWeek;
        return $this;
    }

    /**
     * Getter for startHour
     *
     * @ElementName startHour
     * @return int|null
     */
    public function getStartHour()
    {
        return $this->startHour;
    }

    /**
     * Setter for startHour
     *
     * @ElementName startHour
     * @param int|null $startHour
     * @return $this
     */
    public function setStartHour($startHour)
    {
        $this->startHour = $startHour;
        return $this;
    }

    /**
     * Getter for startMinute
     *
     * @ElementName startMinute
     * @return int|null
     */
    public function getStartMinute()
    {
        return $this->startMinute;
    }

    /**
     * Setter for startMinute
     *
     * @ElementName startMinute
     * @param int|null $startMinute
     * @return $this
     */
    public function setStartMinute($startMinute)
    {
        $this->startMinute = $startMinute;
        return $this;
    }

    /**
     * Getter for endDayOfWeek
     *
     * @ElementName endDayOfWeek
     * @return \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null
     */
    public function getEndDayOfWeek()
    {
        return $this->endDayOfWeek;
    }

    /**
     * Setter for endDayOfWeek
     *
     * @ElementName endDayOfWeek
     * @param \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null $endDayOfWeek
     * @return $this
     */
    public function setEndDayOfWeek(\CWM\BroadWorksConnector\Ocip\Models\DayOfWeek $endDayOfWeek)
    {
        $this->endDayOfWeek = $endDayOfWeek;
        return $this;
    }

    /**
     * Getter for endHour
     *
     * @ElementName endHour
     * @return int|null
     */
    public function getEndHour()
    {
        return $this->endHour;
    }

    /**
     * Setter for endHour
     *
     * @ElementName endHour
     * @param int|null $endHour
     * @return $this
     */
    public function setEndHour($endHour)
    {
        $this->endHour = $endHour;
        return $this;
    }

    /**
     * Getter for endMinute
     *
     * @ElementName endMinute
     * @return int|null
     */
    public function getEndMinute()
    {
        return $this->endMinute;
    }

    /**
     * Setter for endMinute
     *
     * @ElementName endMinute
     * @param int|null $endMinute
     * @return $this
     */
    public function setEndMinute($endMinute)
    {
        $this->endMinute = $endMinute;
        return $this;
    }


}

