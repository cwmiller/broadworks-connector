<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemScheduleGetListRequest
 *
 * Get the list of a system schedules. The list can be filtered by schedule type.
 *         The response is either a SystemScheduleGetListResponse or an
 * ErrorResponse.
 *
 * @see SystemScheduleGetListResponse
 * @see ErrorResponse
 */
class SystemScheduleGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName scheduleType
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleType|null
     */
    private $scheduleType = null;

    /**
     * Getter for scheduleType
     *
     * @ElementName scheduleType
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleType|null
     */
    public function getScheduleType()
    {
        return $this->scheduleType;
    }

    /**
     * Setter for scheduleType
     *
     * @ElementName scheduleType
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleType|null $scheduleType
     * @return $this
     */
    public function setScheduleType(\CWM\BroadWorksConnector\Ocip\Models\ScheduleType $scheduleType)
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }


}

