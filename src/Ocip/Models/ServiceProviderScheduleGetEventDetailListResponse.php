<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderScheduleGetEventDetailListResponse
 *
 * Response to ServiceProviderScheduleGetEventDetailListRequest.
 *         The response contains a list of ScheduleEvents.
 *         If the scheduleKey doesn't refer to an existing schedule on the AS, then the response will be empty.
 *
 * @see ServiceProviderScheduleGetEventDetailListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:5812","type":"sequence"}]
 */
class ServiceProviderScheduleGetEventDetailListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName scheduleEventsList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:5812
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents[]
     */
    protected $scheduleEventsList = [
        
    ];

    /**
     * Getter for scheduleEventsList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents[]
     */
    public function getScheduleEventsList()
    {
        return $this->scheduleEventsList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleEventsList;
    }

    /**
     * Setter for scheduleEventsList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents[] $scheduleEventsList
     * @return $this
     */
    public function setScheduleEventsList(array $scheduleEventsList)
    {
        $this->scheduleEventsList = $scheduleEventsList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleEventsList()
    {
        $this->scheduleEventsList = null;
        return $this;
    }

    /**
     * Adder for scheduleEventsList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents $scheduleEventsList
     * @return $this
     */
    public function addScheduleEventsList($scheduleEventsList)
    {
        $this->scheduleEventsList[] = $scheduleEventsList;
        return $this;
    }
}

