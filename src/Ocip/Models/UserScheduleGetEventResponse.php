<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleGetEventResponse
 *
 * Response to UserScheduleGetEventRequest.
 *         The response contains the event of the user schedule.
 *
 * @see UserScheduleGetEventRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:3696","type":"sequence","children":[{"id":"fb73488c2ef4ac4400ab213b637d79a9:3698","type":"choice","children":[{"id":"fb73488c2ef4ac4400ab213b637d79a9:3700","type":"sequence"}]}]}]
 */
class UserScheduleGetEventResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName startDate
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3696
     * @var string|null
     */
    protected $startDate = null;

    /**
     * @ElementName allDayEvent
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3698
     * @var bool|null
     */
    protected $allDayEvent = null;

    /**
     * @ElementName startTime
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3700
     * @var \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    protected $startTime = null;

    /**
     * @ElementName endTime
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3700
     * @var \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    protected $endTime = null;

    /**
     * @ElementName endDate
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3696
     * @var string|null
     */
    protected $endDate = null;

    /**
     * @ElementName recurrence
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Recurrence
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3696
     * @var \CWM\BroadWorksConnector\Ocip\Models\Recurrence|null
     */
    protected $recurrence = null;

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
     * Getter for allDayEvent
     *
     * @return bool
     */
    public function getAllDayEvent()
    {
        return $this->allDayEvent instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allDayEvent;
    }

    /**
     * Setter for allDayEvent
     *
     * @param bool $allDayEvent
     * @return $this
     */
    public function setAllDayEvent($allDayEvent)
    {
        $this->allDayEvent = $allDayEvent;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllDayEvent()
    {
        $this->allDayEvent = null;
        return $this;
    }

    /**
     * Getter for startTime
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     */
    public function getStartTime()
    {
        return $this->startTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startTime;
    }

    /**
     * Setter for startTime
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HourMinute $startTime
     * @return $this
     */
    public function setStartTime(\CWM\BroadWorksConnector\Ocip\Models\HourMinute $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartTime()
    {
        $this->startTime = null;
        return $this;
    }

    /**
     * Getter for endTime
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     */
    public function getEndTime()
    {
        return $this->endTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endTime;
    }

    /**
     * Setter for endTime
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HourMinute $endTime
     * @return $this
     */
    public function setEndTime(\CWM\BroadWorksConnector\Ocip\Models\HourMinute $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndTime()
    {
        $this->endTime = null;
        return $this;
    }

    /**
     * Getter for endDate
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endDate;
    }

    /**
     * Setter for endDate
     *
     * @param string $endDate
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndDate()
    {
        $this->endDate = null;
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

