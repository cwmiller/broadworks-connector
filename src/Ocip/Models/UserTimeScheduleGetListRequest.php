<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTimeScheduleGetListRequest
 *
 * Get all time schedules for a user. This includes the user's personal schedules and user's group's
 *         schedules.
 *         The response is either a UserTimeScheduleGetListResponse or an ErrorResponse.
 *
 * @see UserTimeScheduleGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:17289","type":"sequence"}]
 */
class UserTimeScheduleGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:17289
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

