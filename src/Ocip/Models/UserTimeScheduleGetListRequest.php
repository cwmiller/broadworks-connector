<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTimeScheduleGetListRequest
 *
 * Get all time schedules for a user. This includes the user's personal schedules
 * and user's group's
 *         schedules.
 *         The response is either a UserTimeScheduleGetListResponse or an
 * ErrorResponse.
 *
 * @see UserTimeScheduleGetListResponse
 * @see ErrorResponse
 */
class UserTimeScheduleGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

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


}

