<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportScheduleTime
 *
 * A scheduled time for call center enhanced reporting scheduled report.
 */
class CallCenterReportScheduleTime
{

    /**
     * @ElementName timeZone
     * @var string|null
     */
    private $timeZone = null;

    /**
     * @ElementName scheduleDate
     * @var string|null
     */
    private $scheduleDate = null;

    /**
     * @ElementName scheduleTime
     * @var \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    private $scheduleTime = null;

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
     * Getter for scheduleDate
     *
     * @ElementName scheduleDate
     * @return string|null
     */
    public function getScheduleDate()
    {
        return $this->scheduleDate;
    }

    /**
     * Setter for scheduleDate
     *
     * @ElementName scheduleDate
     * @param string|null $scheduleDate
     * @return $this
     */
    public function setScheduleDate($scheduleDate)
    {
        $this->scheduleDate = $scheduleDate;
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


}

