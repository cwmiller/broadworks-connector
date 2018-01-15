<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupScheduleGetEventResponse
 *
 * Response to GroupScheduleGetEventRequest.
 *         The response contains the event of the group schedule.
 */
class GroupScheduleGetEventResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName startDate
     * @var string|null
     */
    private $startDate = null;

    /**
     * @ElementName allDayEvent
     * @var bool|null
     */
    private $allDayEvent = null;

    /**
     * @ElementName startTime
     * @var \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    private $startTime = null;

    /**
     * @ElementName endTime
     * @var \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    private $endTime = null;

    /**
     * @ElementName endDate
     * @var string|null
     */
    private $endDate = null;

    /**
     * @ElementName recurrence
     * @var \CWM\BroadWorksConnector\Ocip\Models\Recurrence|null
     */
    private $recurrence = null;

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
     * Getter for allDayEvent
     *
     * @ElementName allDayEvent
     * @return bool|null
     */
    public function getAllDayEvent()
    {
        return $this->allDayEvent;
    }

    /**
     * Setter for allDayEvent
     *
     * @ElementName allDayEvent
     * @param bool|null $allDayEvent
     * @return $this
     */
    public function setAllDayEvent($allDayEvent)
    {
        $this->allDayEvent = $allDayEvent;
        return $this;
    }

    /**
     * Getter for startTime
     *
     * @ElementName startTime
     * @return \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Setter for startTime
     *
     * @ElementName startTime
     * @param \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null $startTime
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Getter for endTime
     *
     * @ElementName endTime
     * @return \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Setter for endTime
     *
     * @ElementName endTime
     * @param \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null $endTime
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Getter for endDate
     *
     * @ElementName endDate
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Setter for endDate
     *
     * @ElementName endDate
     * @param string|null $endDate
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
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

