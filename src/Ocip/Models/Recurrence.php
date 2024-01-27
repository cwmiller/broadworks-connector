<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * Recurrence
 *
 * Defines recurrence.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4099","type":"sequence","children":[{"id":"6337d0cfba4de1c83587203c5b0bae54:4100","type":"choice"},{"id":"6337d0cfba4de1c83587203c5b0bae54:4165","type":"choice"}]}]
 */
class Recurrence
{
    /**
     * @ElementName recurDaily
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurDaily
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4100
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurDaily|null
     */
    protected $recurDaily = null;

    /**
     * @ElementName recurWeekly
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurWeekly
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4100
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurWeekly|null
     */
    protected $recurWeekly = null;

    /**
     * @ElementName recurMonthlyByDay
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByDay
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4100
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByDay|null
     */
    protected $recurMonthlyByDay = null;

    /**
     * @ElementName recurMonthlyByWeek
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByWeek
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4100
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByWeek|null
     */
    protected $recurMonthlyByWeek = null;

    /**
     * @ElementName recurYearlyByDay
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByDay
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4100
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByDay|null
     */
    protected $recurYearlyByDay = null;

    /**
     * @ElementName recurYearlyByWeek
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByWeek
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4100
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByWeek|null
     */
    protected $recurYearlyByWeek = null;

    /**
     * @ElementName recurForEver
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4165
     * @var bool|null
     */
    protected $recurForEver = null;

    /**
     * @ElementName recurEndDate
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4165
     * @var string|null
     */
    protected $recurEndDate = null;

    /**
     * @ElementName recurEndOccurrence
     * @Type int
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4165
     * @MinInclusive 1
     * @MaxInclusive 999
     * @var int|null
     */
    protected $recurEndOccurrence = null;

    /**
     * Getter for recurDaily
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurDaily
     */
    public function getRecurDaily()
    {
        return $this->recurDaily instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recurDaily;
    }

    /**
     * Setter for recurDaily
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurDaily $recurDaily
     * @return $this
     */
    public function setRecurDaily(\CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurDaily $recurDaily)
    {
        $this->recurDaily = $recurDaily;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecurDaily()
    {
        $this->recurDaily = null;
        return $this;
    }

    /**
     * Getter for recurWeekly
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurWeekly
     */
    public function getRecurWeekly()
    {
        return $this->recurWeekly instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recurWeekly;
    }

    /**
     * Setter for recurWeekly
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurWeekly $recurWeekly
     * @return $this
     */
    public function setRecurWeekly(\CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurWeekly $recurWeekly)
    {
        $this->recurWeekly = $recurWeekly;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecurWeekly()
    {
        $this->recurWeekly = null;
        return $this;
    }

    /**
     * Getter for recurMonthlyByDay
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByDay
     */
    public function getRecurMonthlyByDay()
    {
        return $this->recurMonthlyByDay instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recurMonthlyByDay;
    }

    /**
     * Setter for recurMonthlyByDay
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByDay $recurMonthlyByDay
     * @return $this
     */
    public function setRecurMonthlyByDay(\CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByDay $recurMonthlyByDay)
    {
        $this->recurMonthlyByDay = $recurMonthlyByDay;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecurMonthlyByDay()
    {
        $this->recurMonthlyByDay = null;
        return $this;
    }

    /**
     * Getter for recurMonthlyByWeek
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByWeek
     */
    public function getRecurMonthlyByWeek()
    {
        return $this->recurMonthlyByWeek instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recurMonthlyByWeek;
    }

    /**
     * Setter for recurMonthlyByWeek
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByWeek $recurMonthlyByWeek
     * @return $this
     */
    public function setRecurMonthlyByWeek(\CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByWeek $recurMonthlyByWeek)
    {
        $this->recurMonthlyByWeek = $recurMonthlyByWeek;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecurMonthlyByWeek()
    {
        $this->recurMonthlyByWeek = null;
        return $this;
    }

    /**
     * Getter for recurYearlyByDay
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByDay
     */
    public function getRecurYearlyByDay()
    {
        return $this->recurYearlyByDay instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recurYearlyByDay;
    }

    /**
     * Setter for recurYearlyByDay
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByDay $recurYearlyByDay
     * @return $this
     */
    public function setRecurYearlyByDay(\CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByDay $recurYearlyByDay)
    {
        $this->recurYearlyByDay = $recurYearlyByDay;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecurYearlyByDay()
    {
        $this->recurYearlyByDay = null;
        return $this;
    }

    /**
     * Getter for recurYearlyByWeek
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByWeek
     */
    public function getRecurYearlyByWeek()
    {
        return $this->recurYearlyByWeek instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recurYearlyByWeek;
    }

    /**
     * Setter for recurYearlyByWeek
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByWeek $recurYearlyByWeek
     * @return $this
     */
    public function setRecurYearlyByWeek(\CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByWeek $recurYearlyByWeek)
    {
        $this->recurYearlyByWeek = $recurYearlyByWeek;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecurYearlyByWeek()
    {
        $this->recurYearlyByWeek = null;
        return $this;
    }

    /**
     * Getter for recurForEver
     *
     * @return bool
     */
    public function getRecurForEver()
    {
        return $this->recurForEver instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recurForEver;
    }

    /**
     * Setter for recurForEver
     *
     * @param bool $recurForEver
     * @return $this
     */
    public function setRecurForEver($recurForEver)
    {
        $this->recurForEver = $recurForEver;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecurForEver()
    {
        $this->recurForEver = null;
        return $this;
    }

    /**
     * Getter for recurEndDate
     *
     * @return string
     */
    public function getRecurEndDate()
    {
        return $this->recurEndDate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recurEndDate;
    }

    /**
     * Setter for recurEndDate
     *
     * @param string $recurEndDate
     * @return $this
     */
    public function setRecurEndDate($recurEndDate)
    {
        $this->recurEndDate = $recurEndDate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecurEndDate()
    {
        $this->recurEndDate = null;
        return $this;
    }

    /**
     * Getter for recurEndOccurrence
     *
     * @return int
     */
    public function getRecurEndOccurrence()
    {
        return $this->recurEndOccurrence instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recurEndOccurrence;
    }

    /**
     * Setter for recurEndOccurrence
     *
     * @param int $recurEndOccurrence
     * @return $this
     */
    public function setRecurEndOccurrence($recurEndOccurrence)
    {
        $this->recurEndOccurrence = $recurEndOccurrence;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecurEndOccurrence()
    {
        $this->recurEndOccurrence = null;
        return $this;
    }
}

