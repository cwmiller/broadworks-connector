<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemScheduleDeleteEventListRequest
 *
 * Delete a list of events from a system schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:15889","type":"sequence"}]
 */
class SystemScheduleDeleteEventListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName scheduleKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey
     * @Group da582a1f8028404e70d260cf1f891033:15889
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey|null
     */
    protected $scheduleKey = null;

    /**
     * @ElementName eventName
     * @Type string
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:15889
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $eventName = [
        
    ];

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

