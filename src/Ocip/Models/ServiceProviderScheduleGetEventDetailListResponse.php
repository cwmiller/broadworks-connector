<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderScheduleGetEventDetailListResponse
 *
 * Response to ServiceProviderScheduleGetEventDetailListRequest.
 *         The response contains a list of ScheduleEvents.
 *         If the scheduleKey doesn't refer to an existing schedule on the AS, then
 * the response will be empty.
 *
 * @see ServiceProviderScheduleGetEventDetailListRequest
 */
class ServiceProviderScheduleGetEventDetailListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleEventsList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleEvents[]
     */
    private $scheduleEventsList = array(
        
    );

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

