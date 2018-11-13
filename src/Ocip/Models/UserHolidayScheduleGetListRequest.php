<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHolidayScheduleGetListRequest
 *
 * Get a holiday schedule list for a user.
 *         The response is either a UserHolidayScheduleGetListResponse or an
 * ErrorResponse.
 *
 * @see UserHolidayScheduleGetListResponse
 * @see ErrorResponse
 */
class UserHolidayScheduleGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }


}

