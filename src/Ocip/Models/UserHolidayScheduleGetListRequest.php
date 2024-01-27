<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHolidayScheduleGetListRequest
 *
 * Get a holiday schedule list for a user.
 *         The response is either a UserHolidayScheduleGetListResponse or an ErrorResponse.
 *
 * @see UserHolidayScheduleGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:45253","type":"sequence"}]
 */
class UserHolidayScheduleGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:45253
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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

