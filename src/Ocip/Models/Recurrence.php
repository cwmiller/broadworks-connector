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
     * @var \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurDaily|null
     */
    private $recurDaily = null;

    /**
     * @ElementName recurWeekly
     * @var \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurWeekly|null
     */
    private $recurWeekly = null;

    /**
     * @ElementName recurMonthlyByDay
     * @var \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurMonthlyByDay|null
     */
    private $recurMonthlyByDay = null;

    /**
     * @ElementName recurMonthlyByWeek
     * @var \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurMonthlyByWeek|null
     */
    private $recurMonthlyByWeek = null;

    /**
     * @ElementName recurYearlyByDay
     * @var \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurYearlyByDay|null
     */
    private $recurYearlyByDay = null;

    /**
     * @ElementName recurYearlyByWeek
     * @var \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurYearlyByWeek|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurDaily|null
     */
    public function getRecurDaily()
    {
        return $this->recurDaily;
    }

    /**
     * Setter for recurDaily
     *
     * @ElementName recurDaily
     * @param \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurDaily|null $recurDaily
     * @return $this
     */
    public function setRecurDaily($recurDaily)
    {
        $this->recurDaily = $recurDaily;
        return $this;
    }

    /**
     * Getter for recurWeekly
     *
     * @ElementName recurWeekly
     * @return \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurWeekly|null
     */
    public function getRecurWeekly()
    {
        return $this->recurWeekly;
    }

    /**
     * Setter for recurWeekly
     *
     * @ElementName recurWeekly
     * @param \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurWeekly|null $recurWeekly
     * @return $this
     */
    public function setRecurWeekly($recurWeekly)
    {
        $this->recurWeekly = $recurWeekly;
        return $this;
    }

    /**
     * Getter for recurMonthlyByDay
     *
     * @ElementName recurMonthlyByDay
     * @return \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurMonthlyByDay|null
     */
    public function getRecurMonthlyByDay()
    {
        return $this->recurMonthlyByDay;
    }

    /**
     * Setter for recurMonthlyByDay
     *
     * @ElementName recurMonthlyByDay
     * @param \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurMonthlyByDay|null $recurMonthlyByDay
     * @return $this
     */
    public function setRecurMonthlyByDay($recurMonthlyByDay)
    {
        $this->recurMonthlyByDay = $recurMonthlyByDay;
        return $this;
    }

    /**
     * Getter for recurMonthlyByWeek
     *
     * @ElementName recurMonthlyByWeek
     * @return \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurMonthlyByWeek|null
     */
    public function getRecurMonthlyByWeek()
    {
        return $this->recurMonthlyByWeek;
    }

    /**
     * Setter for recurMonthlyByWeek
     *
     * @ElementName recurMonthlyByWeek
     * @param \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurMonthlyByWeek|null $recurMonthlyByWeek
     * @return $this
     */
    public function setRecurMonthlyByWeek($recurMonthlyByWeek)
    {
        $this->recurMonthlyByWeek = $recurMonthlyByWeek;
        return $this;
    }

    /**
     * Getter for recurYearlyByDay
     *
     * @ElementName recurYearlyByDay
     * @return \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurYearlyByDay|null
     */
    public function getRecurYearlyByDay()
    {
        return $this->recurYearlyByDay;
    }

    /**
     * Setter for recurYearlyByDay
     *
     * @ElementName recurYearlyByDay
     * @param \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurYearlyByDay|null $recurYearlyByDay
     * @return $this
     */
    public function setRecurYearlyByDay($recurYearlyByDay)
    {
        $this->recurYearlyByDay = $recurYearlyByDay;
        return $this;
    }

    /**
     * Getter for recurYearlyByWeek
     *
     * @ElementName recurYearlyByWeek
     * @return \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurYearlyByWeek|null
     */
    public function getRecurYearlyByWeek()
    {
        return $this->recurYearlyByWeek;
    }

    /**
     * Setter for recurYearlyByWeek
     *
     * @ElementName recurYearlyByWeek
     * @param \CWM\BroadWorksConnector\Ocip\Models\Recurrence\RecurYearlyByWeek|null $recurYearlyByWeek
     * @return $this
     */
    public function setRecurYearlyByWeek($recurYearlyByWeek)
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

