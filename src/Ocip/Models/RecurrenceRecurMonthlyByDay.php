<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecurrenceRecurMonthlyByDay
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3638","type":"sequence"}]
 */
class RecurrenceRecurMonthlyByDay
{

    /**
     * @ElementName recurInterval
     * @Type int
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3638
     * @MinInclusive 1
     * @MaxInclusive 99
     * @var int|null
     */
    protected $recurInterval = null;

    /**
     * @ElementName dayOfMonth
     * @Type int
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3638
     * @MinInclusive 1
     * @MaxInclusive 31
     * @var int|null
     */
    protected $dayOfMonth = null;

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
     * Getter for dayOfMonth
     *
     * @return int
     */
    public function getDayOfMonth()
    {
        return $this->dayOfMonth instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dayOfMonth;
    }

    /**
     * Setter for dayOfMonth
     *
     * @param int $dayOfMonth
     * @return $this
     */
    public function setDayOfMonth($dayOfMonth)
    {
        $this->dayOfMonth = $dayOfMonth;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDayOfMonth()
    {
        $this->dayOfMonth = null;
        return $this;
    }


}

