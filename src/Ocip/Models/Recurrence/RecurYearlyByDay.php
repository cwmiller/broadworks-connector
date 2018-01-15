<?php

namespace CWM\BroadWorksConnector\Ocip\Models\Recurrence;

/**
 * RecurYearlyByDay
 */
class RecurYearlyByDay
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
     * @ElementName month
     * @var string|null
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

    /**
     * Getter for month
     *
     * @ElementName month
     * @return string|null
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Setter for month
     *
     * @ElementName month
     * @param string|null $month
     * @return $this
     */
    public function setMonth($month)
    {
        $this->month = $month;
        return $this;
    }


}

