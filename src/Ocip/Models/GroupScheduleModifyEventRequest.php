<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupScheduleModifyEventRequest
 *
 * Modify an event of a group schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The startDate element is adjusted to the first occurrence of the
 * recurrent schedule that comes at or after the startDate.
 *         The endDate element is set to the sum of the adjusted starDate element
 * value and the event duration.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupScheduleModifyEventRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName scheduleKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey|null
     */
    private $scheduleKey = null;

    /**
     * @ElementName eventName
     * @var string|null
     */
    private $eventName = null;

    /**
     * @ElementName newEventName
     * @var string|null
     */
    private $newEventName = null;

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
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\Recurrence|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $recurrence = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for scheduleKey
     *
     * @ElementName scheduleKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey|null
     */
    public function getScheduleKey()
    {
        return $this->scheduleKey;
    }

    /**
     * Setter for scheduleKey
     *
     * @ElementName scheduleKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey|null $scheduleKey
     * @return $this
     */
    public function setScheduleKey($scheduleKey)
    {
        $this->scheduleKey = $scheduleKey;
        return $this;
    }

    /**
     * Getter for eventName
     *
     * @ElementName eventName
     * @return string|null
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Setter for eventName
     *
     * @ElementName eventName
     * @param string|null $eventName
     * @return $this
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
        return $this;
    }

    /**
     * Getter for newEventName
     *
     * @ElementName newEventName
     * @return string|null
     */
    public function getNewEventName()
    {
        return $this->newEventName;
    }

    /**
     * Setter for newEventName
     *
     * @ElementName newEventName
     * @param string|null $newEventName
     * @return $this
     */
    public function setNewEventName($newEventName)
    {
        $this->newEventName = $newEventName;
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
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\Recurrence|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRecurrence()
    {
        return $this->recurrence;
    }

    /**
     * Setter for recurrence
     *
     * @ElementName recurrence
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\Recurrence|null|\CWM\BroadWorksConnector\Ocip\Nil $recurrence
     * @return $this
     */
    public function setRecurrence($recurrence)
    {
        $this->recurrence = $recurrence;
        return $this;
    }


}

