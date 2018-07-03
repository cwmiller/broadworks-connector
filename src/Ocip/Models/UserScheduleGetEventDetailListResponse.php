<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleGetEventDetailListResponse
 *
 * Response to UserScheduleGetEventRequest.
 *         The response contains collection of event details of a requested
 * schedule.
 *
 * @see UserScheduleGetEventRequest
 */
class UserScheduleGetEventDetailListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleEvents
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents[]
     */
    private $scheduleEvents = array(
        
    );

    /**
     * Getter for scheduleEvents
     *
     * @ElementName scheduleEvents
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents[]
     */
    public function getScheduleEvents()
    {
        return $this->scheduleEvents;
    }

    /**
     * Setter for scheduleEvents
     *
     * @ElementName scheduleEvents
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents[] $scheduleEvents
     * @return $this
     */
    public function setScheduleEvents($scheduleEvents)
    {
        $this->scheduleEvents = $scheduleEvents;
        return $this;
    }

    /**
     * Adder for scheduleEvents
     *
     * @ElementName scheduleEvents
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents $scheduleEvents
     * @return $this
     */
    public function addScheduleEvents($scheduleEvents)
    {
        $this->scheduleEvents []= $scheduleEvents;
        return $this;
    }


}

