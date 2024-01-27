<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemScheduleModifyEventRequest
 *
 * Modify an event of a system schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The startDate element is adjusted to the first occurrence of the recurrent schedule that comes at or after the startDate.
 *         The endDate element is set to the sum of the adjusted starDate element value and the event duration.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16031","type":"sequence","children":[{"id":"da582a1f8028404e70d260cf1f891033:16036","type":"choice","optional":true,"children":[{"id":"da582a1f8028404e70d260cf1f891033:16038","type":"sequence"}]}]}]
 */
class SystemScheduleModifyEventRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName scheduleKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey
     * @Group da582a1f8028404e70d260cf1f891033:16031
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey|null
     */
    protected $scheduleKey = null;

    /**
     * @ElementName eventName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:16031
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $eventName = null;

    /**
     * @ElementName newEventName
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16031
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $newEventName = null;

    /**
     * @ElementName startDate
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16031
     * @var string|null
     */
    protected $startDate = null;

    /**
     * @ElementName allDayEvent
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:16036
     * @var bool|null
     */
    protected $allDayEvent = null;

    /**
     * @ElementName startTime
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     * @Group da582a1f8028404e70d260cf1f891033:16038
     * @var \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    protected $startTime = null;

    /**
     * @ElementName endTime
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     * @Group da582a1f8028404e70d260cf1f891033:16038
     * @var \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    protected $endTime = null;

    /**
     * @ElementName endDate
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16031
     * @var string|null
     */
    protected $endDate = null;

    /**
     * @ElementName recurrence
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Recurrence
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16031
     * @var \CWM\BroadWorksConnector\Ocip\Models\Recurrence|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $recurrence = null;

    /**
     * Getter for scheduleKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey
     */
    public function getScheduleKey()
    {
        return $this->scheduleKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleKey;
    }

    /**
     * Setter for scheduleKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey $scheduleKey
     * @return $this
     */
    public function setScheduleKey(\CWM\BroadWorksConnector\Ocip\Models\ScheduleKey $scheduleKey)
    {
        $this->scheduleKey = $scheduleKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleKey()
    {
        $this->scheduleKey = null;
        return $this;
    }

    /**
     * Getter for eventName
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->eventName;
    }

    /**
     * Setter for eventName
     *
     * @param string $eventName
     * @return $this
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEventName()
    {
        $this->eventName = null;
        return $this;
    }

    /**
     * Getter for newEventName
     *
     * @return string
     */
    public function getNewEventName()
    {
        return $this->newEventName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newEventName;
    }

    /**
     * Setter for newEventName
     *
     * @param string $newEventName
     * @return $this
     */
    public function setNewEventName($newEventName)
    {
        $this->newEventName = $newEventName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewEventName()
    {
        $this->newEventName = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\Recurrence|null
     */
    public function getRecurrence()
    {
        return $this->recurrence instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recurrence;
    }

    /**
     * Setter for recurrence
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Recurrence|null $recurrence
     * @return $this
     */
    public function setRecurrence(\CWM\BroadWorksConnector\Ocip\Models\Recurrence $recurrence = null)
    {
        if ($recurrence === null) {
            $this->recurrence = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->recurrence = $recurrence;
        }
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

