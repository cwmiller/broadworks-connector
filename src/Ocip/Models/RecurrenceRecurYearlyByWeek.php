<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecurrenceRecurYearlyByWeek
 */
class RecurrenceRecurYearlyByWeek
{

    /**
     * @ElementName recurInterval
     * @var int|null
     */
    private $recurInterval = null;

    /**
     * @ElementName dayOfWeek
     * @var \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null
     */
    private $dayOfWeek = null;

    /**
     * @ElementName dayOfWeekInMonth
     * @var \CWM\BroadWorksConnector\Ocip\Models\DayOfWeekInMonth|null
     */
    private $dayOfWeekInMonth = null;

    /**
     * @ElementName month
     * @var \CWM\BroadWorksConnector\Ocip\Models\Month|null
     */
    private $month = null;

    /**
     * Getter for recurInterval
     *
     * @ElementName recurInterval
     * @return int|null
     */
    public function getRecurInterval()
    {
        return $this->recurInterval;
    }

    /**
     * Setter for recurInterval
     *
     * @ElementName recurInterval
     * @param int|null $recurInterval
     * @return $this
     */
    public function setRecurInterval($recurInterval)
    {
        $this->recurInterval = $recurInterval;
        return $this;
    }

    /**
     * Getter for dayOfWeek
     *
     * @ElementName dayOfWeek
     * @return \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Setter for dayOfWeek
     *
     * @ElementName dayOfWeek
     * @param \CWM\BroadWorksConnector\Ocip\Models\DayOfWeek|null $dayOfWeek
     * @return $this
     */
    public function setDayOfWeek(\CWM\BroadWorksConnector\Ocip\Models\DayOfWeek $dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    /**
     * Getter for dayOfWeekInMonth
     *
     * @ElementName dayOfWeekInMonth
     * @return \CWM\BroadWorksConnector\Ocip\Models\DayOfWeekInMonth|null
     */
    public function getDayOfWeekInMonth()
    {
        return $this->dayOfWeekInMonth;
    }

    /**
     * Setter for dayOfWeekInMonth
     *
     * @ElementName dayOfWeekInMonth
     * @param \CWM\BroadWorksConnector\Ocip\Models\DayOfWeekInMonth|null $dayOfWeekInMonth
     * @return $this
     */
    public function setDayOfWeekInMonth(\CWM\BroadWorksConnector\Ocip\Models\DayOfWeekInMonth $dayOfWeekInMonth)
    {
        $this->dayOfWeekInMonth = $dayOfWeekInMonth;
        return $this;
    }

    /**
     * Getter for month
     *
     * @ElementName month
     * @return \CWM\BroadWorksConnector\Ocip\Models\Month|null
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Setter for month
     *
     * @ElementName month
     * @param \CWM\BroadWorksConnector\Ocip\Models\Month|null $month
     * @return $this
     */
    public function setMonth(\CWM\BroadWorksConnector\Ocip\Models\Month $month)
    {
        $this->month = $month;
        return $this;
    }


}

