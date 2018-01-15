<?php

namespace CWM\BroadWorksConnector\Ocip\Models\Recurrence;

/**
 * RecurMonthlyByWeek
 */
class RecurMonthlyByWeek
{

    /**
     * @ElementName recurInterval
     * @var int|null
     */
    private $recurInterval = null;

    /**
     * @ElementName dayOfWeekInMonth
     * @var string|null
     */
    private $dayOfWeekInMonth = null;

    /**
     * @ElementName dayOfWeek
     * @var string|null
     */
    private $dayOfWeek = null;

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
     * Getter for dayOfWeekInMonth
     *
     * @ElementName dayOfWeekInMonth
     * @return string|null
     */
    public function getDayOfWeekInMonth()
    {
        return $this->dayOfWeekInMonth;
    }

    /**
     * Setter for dayOfWeekInMonth
     *
     * @ElementName dayOfWeekInMonth
     * @param string|null $dayOfWeekInMonth
     * @return $this
     */
    public function setDayOfWeekInMonth($dayOfWeekInMonth)
    {
        $this->dayOfWeekInMonth = $dayOfWeekInMonth;
        return $this;
    }

    /**
     * Getter for dayOfWeek
     *
     * @ElementName dayOfWeek
     * @return string|null
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Setter for dayOfWeek
     *
     * @ElementName dayOfWeek
     * @param string|null $dayOfWeek
     * @return $this
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }


}

