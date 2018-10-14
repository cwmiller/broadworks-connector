<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupScheduleGetEventDetailListResponse
 *
 * Response to GroupScheduleGetEventDetailListRequest.
 *         The response contains a list of ScheduleEvents.
 *         If the scheduleKey doesn't refer to an existing schedule on the AS, then
 * the response will be empty.
 *
 * @see GroupScheduleGetEventDetailListRequest
 */
class GroupScheduleGetEventDetailListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleEventsList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents[]
     */
    private $scheduleEventsList = array(
        
    );

    /**
     * Getter for scheduleEventsList
     *
     * @ElementName scheduleEventsList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents[]
     */
    public function getScheduleEventsList()
    {
        return $this->scheduleEventsList;
    }

    /**
     * Setter for scheduleEventsList
     *
     * @ElementName scheduleEventsList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents[] $scheduleEventsList
     * @return $this
     */
    public function setScheduleEventsList(array $scheduleEventsList)
    {
        $this->scheduleEventsList = $scheduleEventsList;
        return $this;
    }

    /**
     * Adder for scheduleEventsList
     *
     * @ElementName scheduleEventsList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents $scheduleEventsList
     * @return $this
     */
    public function addScheduleEventsList($scheduleEventsList)
    {
        $this->scheduleEventsList []= $scheduleEventsList;
        return $this;
    }


}

