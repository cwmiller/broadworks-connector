<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportSchedule
 *
 * A schedule for call center enhanced reporting scheduled report. It can either be
 * a fixed time schedule
 *         or recurring schedule
 */
class CallCenterReportSchedule
{

    /**
     * @ElementName scheduleTime
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportScheduleTime|null
     */
    private $scheduleTime = null;

    /**
     * @ElementName recurrence
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportScheduleRecurrence|null
     */
    private $recurrence = null;

    /**
     * Getter for scheduleTime
     *
     * @ElementName scheduleTime
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportScheduleTime|null
     */
    public function getScheduleTime()
    {
        return $this->scheduleTime;
    }

    /**
     * Setter for scheduleTime
     *
     * @ElementName scheduleTime
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportScheduleTime|null $scheduleTime
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportScheduleRecurrence|null
     */
    public function getRecurrence()
    {
        return $this->recurrence;
    }

    /**
     * Setter for recurrence
     *
     * @ElementName recurrence
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportScheduleRecurrence|null $recurrence
     * @return $this
     */
    public function setRecurrence($recurrence)
    {
        $this->recurrence = $recurrence;
        return $this;
    }


}

