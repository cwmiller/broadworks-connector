<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderScheduleAddEventRequest
 *
 * Add an event to service provider schedule. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The startDate element is adjusted to the first occurrence of the recurrent schedule that comes at or after the startDate.
 *         The endDate element is set to the sum of the adjusted starDate element value and the event duration.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:5648","type":"sequence","children":[{"id":"f1088f4c5ceb30d524d2ba0f8097c393:5653","type":"choice","children":[{"id":"f1088f4c5ceb30d524d2ba0f8097c393:5655","type":"sequence"}]}]}]
 */
class ServiceProviderScheduleAddEventRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5648
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName scheduleKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5648
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey|null
     */
    private $scheduleKey = null;

    /**
     * @ElementName eventName
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5648
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $eventName = null;

    /**
     * @ElementName startDate
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5648
     * @var string|null
     */
    private $startDate = null;

    /**
     * @ElementName allDayEvent
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5653
     * @var bool|null
     */
    private $allDayEvent = null;

    /**
     * @ElementName startTime
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5655
     * @var \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    private $startTime = null;

    /**
     * @ElementName endTime
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5655
     * @var \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    private $endTime = null;

    /**
     * @ElementName endDate
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5648
     * @var string|null
     */
    private $endDate = null;

    /**
     * @ElementName recurrence
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Recurrence
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5648
     * @var \CWM\BroadWorksConnector\Ocip\Models\Recurrence|null
     */
    private $recurrence = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

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

