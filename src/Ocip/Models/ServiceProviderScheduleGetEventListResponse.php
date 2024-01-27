<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderScheduleGetEventListResponse
 *
 * Response to ServiceProviderScheduleGetEventListRequest.
 *         The response contains a list of events.
 *
 * @see ServiceProviderScheduleGetEventListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:5845","type":"sequence"}]
 */
class ServiceProviderScheduleGetEventListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName eventName
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:5845
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

