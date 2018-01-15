<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportScheduleRecurrence
 *
 * A recurring schedule for call center enhanced reporting scheduled report.
 */
class CallCenterReportScheduleRecurrence
{

    /**
     * @ElementName timeZone
     * @var string|null
     */
    private $timeZone = null;

    /**
     * @ElementName startDate
     * @var string|null
     */
    private $startDate = null;

    /**
     * @ElementName scheduleTime
     * @var \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    private $scheduleTime = null;

    /**
     * @ElementName recurrence
     * @var \CWM\BroadWorksConnector\Ocip\Models\Recurrence|null
     */
    private $recurrence = null;

    /**
     * Getter for timeZone
     *
     * @ElementName timeZone
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Setter for timeZone
     *
     * @ElementName timeZone
     * @param string|null $timeZone
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * Getter for startDate
     *
     * @ElementName startDate
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Setter for startDate
     *
     * @ElementName startDate
     * @param string|null $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Getter for scheduleTime
     *
     * @ElementName scheduleTime
     * @return \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    public function getScheduleTime()
    {
        return $this->scheduleTime;
    }

    /**
     * Setter for scheduleTime
     *
     * @ElementName scheduleTime
     * @param \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null $scheduleTime
     * @return $this
     */
    public function setScheduleTime($scheduleTime)
    {
        $this->scheduleTime = $scheduleTime;
        return $this;
    }

    /**
     * Getter for recurrence
     *
     * @ElementName recurrence
     * @return \CWM\BroadWorksConnector\Ocip\Models\Recurrence|null
     */
    public function getRecurrence()
    {
        return $this->recurrence;
    }

    /**
     * Setter for recurrence
     *
     * @ElementName recurrence
     * @param \CWM\BroadWorksConnector\Ocip\Models\Recurrence|null $recurrence
     * @return $this
     */
    public function setRecurrence($recurrence)
    {
        $this->recurrence = $recurrence;
        return $this;
    }


}

