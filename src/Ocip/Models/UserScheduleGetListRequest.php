<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleGetListRequest
 *
 * Get the list of a user schedules. The list can be filtered by schedule type.
 *         The response is either a UserScheduleGetListResponse or an
 * ErrorResponse.
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
     * @var string|null
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

