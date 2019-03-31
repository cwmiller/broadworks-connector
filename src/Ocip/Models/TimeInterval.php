<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TimeInterval
 *
 * Time Interval.
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:43910","type":"sequence"}]
 */
class TimeInterval
{

    /**
     * @ElementName startDayOfWeek
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek
     * @Group ab0042aa512abc10edb3c55e4b416b0b:43910
     * @var \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null
     */
    private $startDayOfWeek = null;

    /**
     * @ElementName startHour
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:43910
     * @MinInclusive
     * @MaxInclusive 23
     * @var int|null
     */
    private $startHour = null;

    /**
     * @ElementName startMinute
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:43910
     * @MinInclusive
     * @MaxInclusive 59
     * @var int|null
     */
    private $startMinute = null;

    /**
     * @ElementName endDayOfWeek
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek
     * @Group ab0042aa512abc10edb3c55e4b416b0b:43910
     * @var \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null
     */
    private $endDayOfWeek = null;

    /**
     * @ElementName endHour
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:43910
     * @MinInclusive
     * @MaxInclusive 23
     * @var int|null
     */
    private $endHour = null;

    /**
     * @ElementName endMinute
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:43910
     * @MinInclusive
     * @MaxInclusive 59
     * @var int|null
     */
    private $endMinute = null;

    /**
     * Getter for startDayOfWeek
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek
     */
    public function getStartDayOfWeek()
    {
        return $this->startDayOfWeek instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startDayOfWeek;
    }

    /**
     * Setter for startDayOfWeek
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek $startDayOfWeek
     * @return $this
     */
    public function setStartDayOfWeek(\CWM\BroadWorksConnector\Ocip\Models\DayOfWeek $startDayOfWeek)
    {
        $this->startDayOfWeek = $startDayOfWeek;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartDayOfWeek()
    {
        $this->startDayOfWeek = null;
        return $this;
    }

    /**
     * Getter for startHour
     *
     * @return int
     */
    public function getStartHour()
    {
        return $this->startHour instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startHour;
    }

    /**
     * Setter for startHour
     *
     * @param int $startHour
     * @return $this
     */
    public function setStartHour($startHour)
    {
        $this->startHour = $startHour;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartHour()
    {
        $this->startHour = null;
        return $this;
    }

    /**
     * Getter for startMinute
     *
     * @return int
     */
    public function getStartMinute()
    {
        return $this->startMinute instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startMinute;
    }

    /**
     * Setter for startMinute
     *
     * @param int $startMinute
     * @return $this
     */
    public function setStartMinute($startMinute)
    {
        $this->startMinute = $startMinute;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartMinute()
    {
        $this->startMinute = null;
        return $this;
    }

    /**
     * Getter for endDayOfWeek
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek
     */
    public function getEndDayOfWeek()
    {
        return $this->endDayOfWeek instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endDayOfWeek;
    }

    /**
     * Setter for endDayOfWeek
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek $endDayOfWeek
     * @return $this
     */
    public function setEndDayOfWeek(\CWM\BroadWorksConnector\Ocip\Models\DayOfWeek $endDayOfWeek)
    {
        $this->endDayOfWeek = $endDayOfWeek;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndDayOfWeek()
    {
        $this->endDayOfWeek = null;
        return $this;
    }

    /**
     * Getter for endHour
     *
     * @return int
     */
    public function getEndHour()
    {
        return $this->endHour instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endHour;
    }

    /**
     * Setter for endHour
     *
     * @param int $endHour
     * @return $this
     */
    public function setEndHour($endHour)
    {
        $this->endHour = $endHour;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndHour()
    {
        $this->endHour = null;
        return $this;
    }

    /**
     * Getter for endMinute
     *
     * @return int
     */
    public function getEndMinute()
    {
        return $this->endMinute instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endMinute;
    }

    /**
     * Setter for endMinute
     *
     * @param int $endMinute
     * @return $this
     */
    public function setEndMinute($endMinute)
    {
        $this->endMinute = $endMinute;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndMinute()
    {
        $this->endMinute = null;
        return $this;
    }


}

