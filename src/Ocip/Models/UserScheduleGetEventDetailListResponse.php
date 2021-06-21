<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleGetEventDetailListResponse
 *
 * Response to UserScheduleGetEventRequest.
 *         The response contains collection of event details of a requested schedule.
 *
 * @see UserScheduleGetEventRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:3623","type":"sequence"}]
 */
class UserScheduleGetEventDetailListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleEvents
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3623
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents[]
     */
    private $scheduleEvents = array(
        
    );

    /**
     * Getter for scheduleEvents
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents[]
     */
    public function getScheduleEvents()
    {
        return $this->scheduleEvents instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleEvents;
    }

    /**
     * Setter for scheduleEvents
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents[] $scheduleEvents
     * @return $this
     */
    public function setScheduleEvents(array $scheduleEvents)
    {
        $this->scheduleEvents = $scheduleEvents;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleEvents()
    {
        $this->scheduleEvents = null;
        return $this;
    }

    /**
     * Adder for scheduleEvents
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents $scheduleEvents
     * @return $this
     */
    public function addScheduleEvents($scheduleEvents)
    {
        $this->scheduleEvents[] = $scheduleEvents;
        return $this;
    }


}

