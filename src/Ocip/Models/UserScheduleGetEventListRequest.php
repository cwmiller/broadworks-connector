<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleGetEventListRequest
 *
 * Get the list of events of a user schedule.
 *         The response is either a UserScheduleGetEventListResponse or an
 * ErrorResponse.
 */
class UserScheduleGetEventListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName scheduleKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey|null
     */
    private $scheduleKey = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

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

