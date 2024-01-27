<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupScheduleGetEventListResponse
 *
 * Response to GroupScheduleGetEventListRequest.
 *         The response contains a list of events.
 *
 * @see GroupScheduleGetEventListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:7197","type":"sequence"}]
 */
class GroupScheduleGetEventListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName eventName
     * @Type string
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:7197
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $eventName = [
        
    ];

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

