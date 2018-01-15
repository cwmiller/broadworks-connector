<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemScheduleGetEventListRequest
 *
 * Get the list of events of a system schedule.
 *         The response is either a SystemScheduleGetResponse or an ErrorResponse.
 */
class SystemScheduleGetEventListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName scheduleKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey|null
     */
    private $scheduleKey = null;

    /**
     * Getter for scheduleKey
     *
     * @ElementName scheduleKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey|null
     */
    public function getScheduleKey()
    {
        return $this->scheduleKey;
    }

    /**
     * Setter for scheduleKey
     *
     * @ElementName scheduleKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey|null $scheduleKey
     * @return $this
     */
    public function setScheduleKey($scheduleKey)
    {
        $this->scheduleKey = $scheduleKey;
        return $this;
    }


}

