<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupScheduleGetEventListResponse
 *
 * Response to GroupScheduleGetEventListRequest.
 *         The response contains a list of events.
 */
class GroupScheduleGetEventListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName eventName
     * @var string[]
     */
    private $eventName = array(
        
    );

    /**
     * Getter for eventName
     *
     * @ElementName eventName
     * @return string[]
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Setter for eventName
     *
     * @ElementName eventName
     * @param string[] $eventName
     * @return $this
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
        return $this;
    }

    /**
     * Adder for eventName
     *
     * @ElementName eventName
     * @param string $eventName
     * @return $this
     */
    public function addEventName($eventName)
    {
        $this->eventName []= $eventName;
        return $this;
    }


}
