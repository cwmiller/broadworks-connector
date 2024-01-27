<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecurrenceRecurYearlyByDay
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4146","type":"sequence"}]
 */
class RecurrenceRecurYearlyByDay
{
    /**
     * @ElementName recurInterval
     * @Type int
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4146
     * @MinInclusive 1
     * @MaxInclusive 99
     * @var int|null
     */
    protected $recurInterval = null;

    /**
     * @ElementName dayOfMonth
     * @Type int
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4146
     * @MinInclusive 1
     * @MaxInclusive 31
     * @var int|null
     */
    protected $dayOfMonth = null;

    /**
     * @ElementName month
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Month
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4146
     * @var \CWM\BroadWorksConnector\Ocip\Models\Month|null
     */
    protected $month = null;

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

