<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleGetEventDetailListRequest
 *
 * Request the list of schedules viewable by a User. The list can be filtered by
 * schedule type.
 *         The response is either a UserScheduleGetEventDetailListResponse or an
 * ErrorResponse.
 *
 * @see UserScheduleGetEventDetailListResponse
 * @see ErrorResponse
 */
class UserScheduleGetEventDetailListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName scheduleGlobalKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null
     */
    private $scheduleGlobalKey = null;

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
     * Getter for scheduleGlobalKey
     *
     * @ElementName scheduleGlobalKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null
     */
    public function getScheduleGlobalKey()
    {
        return $this->scheduleGlobalKey;
    }

    /**
     * Setter for scheduleGlobalKey
     *
     * @ElementName scheduleGlobalKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null $scheduleGlobalKey
     * @return $this
     */
    public function setScheduleGlobalKey($scheduleGlobalKey)
    {
        $this->scheduleGlobalKey = $scheduleGlobalKey;
        return $this;
    }


}

