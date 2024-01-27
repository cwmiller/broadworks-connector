<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleGetEventListResponse
 *
 * Response to UserScheduleGetEventListRequest.
 *         The response contains a list of events.
 *
 * @see UserScheduleGetEventListRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:3662","type":"sequence"}]
 */
class UserScheduleGetEventListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName eventName
     * @Type string
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3662
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

