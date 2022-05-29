<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecurrenceRecurMonthlyByWeek
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3647","type":"sequence"}]
 */
class RecurrenceRecurMonthlyByWeek
{

    /**
     * @ElementName recurInterval
     * @Type int
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3647
     * @MinInclusive 1
     * @MaxInclusive 99
     * @var int|null
     */
    protected $recurInterval = null;

    /**
     * @ElementName dayOfWeekInMonth
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DayOfWeekInMonth
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3647
     * @var \CWM\BroadWorksConnector\Ocip\Models\DayOfWeekInMonth|null
     */
    protected $dayOfWeekInMonth = null;

    /**
     * @ElementName dayOfWeek
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3647
     * @var \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null
     */
    protected $dayOfWeek = null;

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


}

