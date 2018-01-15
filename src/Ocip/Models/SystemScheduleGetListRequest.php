<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemScheduleGetListRequest
 *
 * Get the list of a system schedules. The list can be filtered by schedule type.
 *         The response is either a SystemScheduleGetListResponse or an
 * ErrorResponse.
 */
class SystemScheduleGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName scheduleType
     * @var string|null
     */
    private $scheduleType = null;

    /**
     * Getter for scheduleType
     *
     * @ElementName scheduleType
     * @return string|null
     */
    public function getScheduleType()
    {
        return $this->scheduleType;
    }

    /**
     * Setter for scheduleType
     *
     * @ElementName scheduleType
     * @param string|null $scheduleType
     * @return $this
     */
    public function setScheduleType($scheduleType)
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }


}

