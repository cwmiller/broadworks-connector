<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupScheduleDeleteEventListRequest
 *
 * Delete a list of events from a group schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:7107","type":"sequence"}]
 */
class GroupScheduleDeleteEventListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:7107
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:7107
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName scheduleKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey
     * @Group 4b0e7857796c636464362260a2f8e5ee:7107
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey|null
     */
    protected $scheduleKey = null;

    /**
     * @ElementName eventName
     * @Type string
     * @Array
     * @Group 4b0e7857796c636464362260a2f8e5ee:7107
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $eventName = [
        
    ];

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
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
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
     * @return string[]
     */
    public function getEventName()
    {
        return $this->eventName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->eventName;
    }

    /**
     * Setter for eventName
     *
     * @param string[] $eventName
     * @return $this
     */
    public function setEventName(array $eventName)
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
     * Adder for eventName
     *
     * @param string $eventName
     * @return $this
     */
    public function addEventName(string $eventName)
    {
        $this->eventName[] = $eventName;
        return $this;
    }
}

