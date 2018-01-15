<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHolidayScheduleGetRequest
 *
 * Get a holiday schedule a user.
 *         The response is either a UserHolidayScheduleGetResponse or an
 * ErrorResponse.
 */
class UserHolidayScheduleGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName holidayScheduleName
     * @var string|null
     */
    private $holidayScheduleName = null;

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
     * Getter for holidayScheduleName
     *
     * @ElementName holidayScheduleName
     * @return string|null
     */
    public function getHolidayScheduleName()
    {
        return $this->holidayScheduleName;
    }

    /**
     * Setter for holidayScheduleName
     *
     * @ElementName holidayScheduleName
     * @param string|null $holidayScheduleName
     * @return $this
     */
    public function setHolidayScheduleName($holidayScheduleName)
    {
        $this->holidayScheduleName = $holidayScheduleName;
        return $this;
    }


}

