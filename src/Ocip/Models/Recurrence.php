<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * Recurrence
 *
 * Defines recurrence.
 */
class Recurrence
{

    /**
     * @ElementName recurDaily
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurDaily|null
     */
    private $recurDaily = null;

    /**
     * @ElementName recurWeekly
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurWeekly|null
     */
    private $recurWeekly = null;

    /**
     * @ElementName recurMonthlyByDay
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByDay|null
     */
    private $recurMonthlyByDay = null;

    /**
     * @ElementName recurMonthlyByWeek
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByWeek|null
     */
    private $recurMonthlyByWeek = null;

    /**
     * @ElementName recurYearlyByDay
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByDay|null
     */
    private $recurYearlyByDay = null;

    /**
     * @ElementName recurYearlyByWeek
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByWeek|null
     */
    private $recurYearlyByWeek = null;

    /**
     * @ElementName recurForEver
     * @var bool|null
     */
    private $recurForEver = null;

    /**
     * @ElementName recurEndDate
     * @var string|null
     */
    private $recurEndDate = null;

    /**
     * @ElementName recurEndOccurrence
     * @var int|null
     */
    private $recurEndOccurrence = null;

    /**
     * Getter for recurDaily
     *
     * @ElementName recurDaily
     * @return \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurDaily|null
     */
    public function getRecurDaily()
    {
        return $this->recurDaily;
    }

    /**
     * Setter for recurDaily
     *
     * @ElementName recurDaily
     * @param \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurDaily|null $recurDaily
     * @return $this
     */
    public function setRecurDaily(\CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurDaily $recurDaily)
    {
        $this->recurDaily = $recurDaily;
        return $this;
    }

    /**
     * Getter for recurWeekly
     *
     * @ElementName recurWeekly
     * @return \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurWeekly|null
     */
    public function getRecurWeekly()
    {
        return $this->recurWeekly;
    }

    /**
     * Setter for recurWeekly
     *
     * @ElementName recurWeekly
     * @param \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurWeekly|null $recurWeekly
     * @return $this
     */
    public function setRecurWeekly(\CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurWeekly $recurWeekly)
    {
        $this->recurWeekly = $recurWeekly;
        return $this;
    }

    /**
     * Getter for recurMonthlyByDay
     *
     * @ElementName recurMonthlyByDay
     * @return \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByDay|null
     */
    public function getRecurMonthlyByDay()
    {
        return $this->recurMonthlyByDay;
    }

    /**
     * Setter for recurMonthlyByDay
     *
     * @ElementName recurMonthlyByDay
     * @param \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByDay|null $recurMonthlyByDay
     * @return $this
     */
    public function setRecurMonthlyByDay(\CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByDay $recurMonthlyByDay)
    {
        $this->recurMonthlyByDay = $recurMonthlyByDay;
        return $this;
    }

    /**
     * Getter for recurMonthlyByWeek
     *
     * @ElementName recurMonthlyByWeek
     * @return \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByWeek|null
     */
    public function getRecurMonthlyByWeek()
    {
        return $this->recurMonthlyByWeek;
    }

    /**
     * Setter for recurMonthlyByWeek
     *
     * @ElementName recurMonthlyByWeek
     * @param \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByWeek|null $recurMonthlyByWeek
     * @return $this
     */
    public function setRecurMonthlyByWeek(\CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByWeek $recurMonthlyByWeek)
    {
        $this->recurMonthlyByWeek = $recurMonthlyByWeek;
        return $this;
    }

    /**
     * Getter for recurYearlyByDay
     *
     * @ElementName recurYearlyByDay
     * @return \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByDay|null
     */
    public function getRecurYearlyByDay()
    {
        return $this->recurYearlyByDay;
    }

    /**
     * Setter for recurYearlyByDay
     *
     * @ElementName recurYearlyByDay
     * @param \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByDay|null $recurYearlyByDay
     * @return $this
     */
    public function setRecurYearlyByDay(\CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByDay $recurYearlyByDay)
    {
        $this->recurYearlyByDay = $recurYearlyByDay;
        return $this;
    }

    /**
     * Getter for recurYearlyByWeek
     *
     * @ElementName recurYearlyByWeek
     * @return \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByWeek|null
     */
    public function getRecurYearlyByWeek()
    {
        return $this->recurYearlyByWeek;
    }

    /**
     * Setter for recurYearlyByWeek
     *
     * @ElementName recurYearlyByWeek
     * @param \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByWeek|null $recurYearlyByWeek
     * @return $this
     */
    public function setRecurYearlyByWeek(\CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByWeek $recurYearlyByWeek)
    {
        $this->recurYearlyByWeek = $recurYearlyByWeek;
        return $this;
    }

    /**
     * Getter for recurForEver
     *
     * @ElementName recurForEver
     * @return bool|null
     */
    public function getRecurForEver()
    {
        return $this->recurForEver;
    }

    /**
     * Setter for recurForEver
     *
     * @ElementName recurForEver
     * @param bool|null $recurForEver
     * @return $this
     */
    public function setRecurForEver($recurForEver)
    {
        $this->recurForEver = $recurForEver;
        return $this;
    }

    /**
     * Getter for recurEndDate
     *
     * @ElementName recurEndDate
     * @return string|null
     */
    public function getRecurEndDate()
    {
        return $this->recurEndDate;
    }

    /**
     * Setter for recurEndDate
     *
     * @ElementName recurEndDate
     * @param string|null $recurEndDate
     * @return $this
     */
    public function setRecurEndDate($recurEndDate)
    {
        $this->recurEndDate = $recurEndDate;
        return $this;
    }

    /**
     * Getter for recurEndOccurrence
     *
     * @ElementName recurEndOccurrence
     * @return int|null
     */
    public function getRecurEndOccurrence()
    {
        return $this->recurEndOccurrence;
    }

    /**
     * Setter for recurEndOccurrence
     *
     * @ElementName recurEndOccurrence
     * @param int|null $recurEndOccurrence
     * @return $this
     */
    public function setRecurEndOccurrence($recurEndOccurrence)
    {
        $this->recurEndOccurrence = $recurEndOccurrence;
        return $this;
    }


}

