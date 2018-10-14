<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleGetListRequest
 *
 * Get the list of a user schedules. The list can be filtered by schedule type.
 *         The response is either a UserScheduleGetListResponse or an
 * ErrorResponse.
 *
 * @see UserScheduleGetListResponse
 * @see ErrorResponse
 */
class UserScheduleGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName scheduleType
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleType|null
     */
    private $scheduleType = null;

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

