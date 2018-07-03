<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemScheduleModifyRequest
 *
 * Modify a system schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemScheduleModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName scheduleKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey|null
     */
    private $scheduleKey = null;

    /**
     * @ElementName newScheduleName
     * @var string|null
     */
    private $newScheduleName = null;

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

    /**
     * Getter for newScheduleName
     *
     * @ElementName newScheduleName
     * @return string|null
     */
    public function getNewScheduleName()
    {
        return $this->newScheduleName;
    }

    /**
     * Setter for newScheduleName
     *
     * @ElementName newScheduleName
     * @param string|null $newScheduleName
     * @return $this
     */
    public function setNewScheduleName($newScheduleName)
    {
        $this->newScheduleName = $newScheduleName;
        return $this;
    }


}

