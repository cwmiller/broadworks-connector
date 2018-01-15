<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemScheduleGetEventRequest
 *
 * Get an event from a system schedule.
 *         The response is either a SystemScheduleGetEventResponse or an
 * ErrorResponse.
 */
class SystemScheduleGetEventRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

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


}

