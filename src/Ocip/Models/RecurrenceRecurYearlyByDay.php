<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * RecurrenceRecurYearlyByDay
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:2649","type":"sequence"}]
 */
class RecurrenceRecurYearlyByDay
{

    /**
     * @ElementName recurInterval
     * @Type int
     * @Optional
     * @Group 8e629edbac315ae7889caca732382c44:2649
     * @var int|null
     */
    private $recurInterval = null;

    /**
     * @ElementName dayOfMonth
     * @Type int
     * @Group 8e629edbac315ae7889caca732382c44:2649
     * @var int|null
     */
    private $dayOfMonth = null;

    /**
     * @ElementName month
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Month
     * @Group 8e629edbac315ae7889caca732382c44:2649
     * @var \CWM\BroadWorksConnector\Ocip\Models\Month|null
     */
    private $month = null;

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

