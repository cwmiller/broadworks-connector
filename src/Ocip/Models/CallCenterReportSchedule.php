<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportSchedule
 *
 * A schedule for call center enhanced reporting scheduled report. It can either be a fixed time schedule
 *         or recurring schedule
 *
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:7517","type":"choice"}]
 */
class CallCenterReportSchedule
{

    /**
     * @ElementName scheduleTime
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportScheduleTime
     * @Group e2c537e3e39483b96620673a7012ffdd:7517
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportScheduleTime|null
     */
    protected $scheduleTime = null;

    /**
     * @ElementName recurrence
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportScheduleRecurrence
     * @Group e2c537e3e39483b96620673a7012ffdd:7517
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportScheduleRecurrence|null
     */
    protected $recurrence = null;

    /**
     * Getter for scheduleTime
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportScheduleTime
     */
    public function getScheduleTime()
    {
        return $this->scheduleTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleTime;
    }

    /**
     * Setter for scheduleTime
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportScheduleTime $scheduleTime
     * @return $this
     */
    public function setScheduleTime(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportScheduleTime $scheduleTime)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportScheduleRecurrence
     */
    public function getRecurrence()
    {
        return $this->recurrence instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recurrence;
    }

    /**
     * Setter for recurrence
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportScheduleRecurrence $recurrence
     * @return $this
     */
    public function setRecurrence(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportScheduleRecurrence $recurrence)
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

