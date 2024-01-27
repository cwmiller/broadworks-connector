<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportScheduleRecurrence
 *
 * A recurring schedule for call center enhanced reporting scheduled report.
 *
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7515","type":"sequence"}]
 */
class CallCenterReportScheduleRecurrence
{
    /**
     * @ElementName timeZone
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:7515
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    protected $timeZone = null;

    /**
     * @ElementName startDate
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:7515
     * @var string|null
     */
    protected $startDate = null;

    /**
     * @ElementName scheduleTime
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     * @Group 4d65d3449061c568639c8cc1e2492285:7515
     * @var \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    protected $scheduleTime = null;

    /**
     * @ElementName recurrence
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Recurrence
     * @Group 4d65d3449061c568639c8cc1e2492285:7515
     * @var \CWM\BroadWorksConnector\Ocip\Models\Recurrence|null
     */
    protected $recurrence = null;

    /**
     * Getter for timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeZone;
    }

    /**
     * Setter for timeZone
     *
     * @param string $timeZone
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeZone()
    {
        $this->timeZone = null;
        return $this;
    }

    /**
     * Getter for startDate
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startDate;
    }

    /**
     * Setter for startDate
     *
     * @param string $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartDate()
    {
        $this->startDate = null;
        return $this;
    }

    /**
     * Getter for scheduleTime
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     */
    public function getScheduleTime()
    {
        return $this->scheduleTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleTime;
    }

    /**
     * Setter for scheduleTime
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HourMinute $scheduleTime
     * @return $this
     */
    public function setScheduleTime(\CWM\BroadWorksConnector\Ocip\Models\HourMinute $scheduleTime)
    {
        $this->scheduleTime = $scheduleTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleTime()
    {
        $this->scheduleTime = null;
        return $this;
    }

    /**
     * Getter for recurrence
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Recurrence
     */
    public function getRecurrence()
    {
        return $this->recurrence instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recurrence;
    }

    /**
     * Setter for recurrence
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Recurrence $recurrence
     * @return $this
     */
    public function setRecurrence(\CWM\BroadWorksConnector\Ocip\Models\Recurrence $recurrence)
    {
        $this->recurrence = $recurrence;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecurrence()
    {
        $this->recurrence = null;
        return $this;
    }
}

