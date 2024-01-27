<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemScheduleGetListRequest
 *
 * Get the list of a system schedules. The list can be filtered by schedule type.
 *         The response is either a SystemScheduleGetListResponse or an ErrorResponse.
 *
 * @see SystemScheduleGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:15996","type":"sequence"}]
 */
class SystemScheduleGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName scheduleType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleType
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:15996
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleType|null
     */
    protected $scheduleType = null;

    /**
     * Getter for scheduleType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleType
     */
    public function getScheduleType()
    {
        return $this->scheduleType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleType;
    }

    /**
     * Setter for scheduleType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleType $scheduleType
     * @return $this
     */
    public function setScheduleType(\CWM\BroadWorksConnector\Ocip\Models\ScheduleType $scheduleType)
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleType()
    {
        $this->scheduleType = null;
        return $this;
    }
}

