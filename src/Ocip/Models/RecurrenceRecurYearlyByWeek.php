<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecurrenceRecurYearlyByWeek
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:2659","type":"sequence"}]
 */
class RecurrenceRecurYearlyByWeek
{

    /**
     * @ElementName recurInterval
     * @Type int
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:2659
     * @var int|null
     */
    private $recurInterval = null;

    /**
     * @ElementName dayOfWeek
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek
     * @Group 18b369af88e42ffdb4166615c670ce2c:2659
     * @var \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null
     */
    private $dayOfWeek = null;

    /**
     * @ElementName dayOfWeekInMonth
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DayOfWeekInMonth
     * @Group 18b369af88e42ffdb4166615c670ce2c:2659
     * @var \CWM\BroadWorksConnector\Ocip\Models\DayOfWeekInMonth|null
     */
    private $dayOfWeekInMonth = null;

    /**
     * @ElementName month
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Month
     * @Group 18b369af88e42ffdb4166615c670ce2c:2659
     * @var \CWM\BroadWorksConnector\Ocip\Models\Month|null
     */
    private $month = null;

    /**
     * Getter for recurInterval
     *
     * @return int
     */
    public function getRecurInterval()
    {
        return $this->recurInterval instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recurInterval;
    }

    /**
     * Setter for recurInterval
     *
     * @param int $recurInterval
     * @return $this
     */
    public function setRecurInterval($recurInterval)
    {
        $this->recurInterval = $recurInterval;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecurInterval()
    {
        $this->recurInterval = null;
        return $this;
    }

    /**
     * Getter for dayOfWeek
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dayOfWeek;
    }

    /**
     * Setter for dayOfWeek
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek $dayOfWeek
     * @return $this
     */
    public function setDayOfWeek(\CWM\BroadWorksConnector\Ocip\Models\DayOfWeek $dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDayOfWeek()
    {
        $this->dayOfWeek = null;
        return $this;
    }

    /**
     * Getter for dayOfWeekInMonth
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DayOfWeekInMonth
     */
    public function getDayOfWeekInMonth()
    {
        return $this->dayOfWeekInMonth instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dayOfWeekInMonth;
    }

    /**
     * Setter for dayOfWeekInMonth
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DayOfWeekInMonth $dayOfWeekInMonth
     * @return $this
     */
    public function setDayOfWeekInMonth(\CWM\BroadWorksConnector\Ocip\Models\DayOfWeekInMonth $dayOfWeekInMonth)
    {
        $this->dayOfWeekInMonth = $dayOfWeekInMonth;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDayOfWeekInMonth()
    {
        $this->dayOfWeekInMonth = null;
        return $this;
    }

    /**
     * Getter for month
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Month
     */
    public function getMonth()
    {
        return $this->month instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->month;
    }

    /**
     * Setter for month
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Month $month
     * @return $this
     */
    public function setMonth(\CWM\BroadWorksConnector\Ocip\Models\Month $month)
    {
        $this->month = $month;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMonth()
    {
        $this->month = null;
        return $this;
    }


}

