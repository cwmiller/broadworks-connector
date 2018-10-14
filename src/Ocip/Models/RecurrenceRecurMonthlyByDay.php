<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecurrenceRecurMonthlyByDay
 */
class RecurrenceRecurMonthlyByDay
{

    /**
     * @ElementName recurInterval
     * @var int|null
     */
    private $recurInterval = null;

    /**
     * @ElementName dayOfMonth
     * @var int|null
     */
    private $dayOfMonth = null;

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
     * Getter for dayOfMonth
     *
     * @ElementName dayOfMonth
     * @return int|null
     */
    public function getDayOfMonth()
    {
        return $this->dayOfMonth;
    }

    /**
     * Setter for dayOfMonth
     *
     * @ElementName dayOfMonth
     * @param int|null $dayOfMonth
     * @return $this
     */
    public function setDayOfMonth($dayOfMonth)
    {
        $this->dayOfMonth = $dayOfMonth;
        return $this;
    }


}

