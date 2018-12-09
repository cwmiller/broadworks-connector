<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * Recurrence
 *
 * Defines recurrence.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:2602","type":"sequence","children":[{"id":"8e629edbac315ae7889caca732382c44:2603","type":"choice","children":[{"id":"8e629edbac315ae7889caca732382c44:2607","type":"sequence"},{"id":"8e629edbac315ae7889caca732382c44:2615","type":"sequence"},{"id":"8e629edbac315ae7889caca732382c44:2630","type":"sequence"},{"id":"8e629edbac315ae7889caca732382c44:2639","type":"sequence"},{"id":"8e629edbac315ae7889caca732382c44:2649","type":"sequence"},{"id":"8e629edbac315ae7889caca732382c44:2659","type":"sequence"}]},{"id":"8e629edbac315ae7889caca732382c44:2668","type":"choice"}]}]
 */
class Recurrence
{

    /**
     * @ElementName recurDaily
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurDaily
     * @Group 8e629edbac315ae7889caca732382c44:2603
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurDaily|null
     */
    private $recurDaily = null;

    /**
     * @ElementName recurWeekly
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurWeekly
     * @Group 8e629edbac315ae7889caca732382c44:2603
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurWeekly|null
     */
    private $recurWeekly = null;

    /**
     * @ElementName recurMonthlyByDay
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByDay
     * @Group 8e629edbac315ae7889caca732382c44:2603
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByDay|null
     */
    private $recurMonthlyByDay = null;

    /**
     * @ElementName recurMonthlyByWeek
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByWeek
     * @Group 8e629edbac315ae7889caca732382c44:2603
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurMonthlyByWeek|null
     */
    private $recurMonthlyByWeek = null;

    /**
     * @ElementName recurYearlyByDay
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByDay
     * @Group 8e629edbac315ae7889caca732382c44:2603
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByDay|null
     */
    private $recurYearlyByDay = null;

    /**
     * @ElementName recurYearlyByWeek
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByWeek
     * @Group 8e629edbac315ae7889caca732382c44:2603
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecurrenceRecurYearlyByWeek|null
     */
    private $recurYearlyByWeek = null;

    /**
     * @ElementName recurForEver
     * @Type bool
     * @Group 8e629edbac315ae7889caca732382c44:2668
     * @var bool|null
     */
    private $recurForEver = null;

    /**
     * @ElementName recurEndDate
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:2668
     * @var string|null
     */
    private $recurEndDate = null;

    /**
     * @ElementName recurEndOccurrence
     * @Type int
     * @Group 8e629edbac315ae7889caca732382c44:2668
     * @var int|null
     */
    private $recurEndOccurrence = null;

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

