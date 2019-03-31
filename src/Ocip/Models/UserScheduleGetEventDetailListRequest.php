<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleGetEventDetailListRequest
 *
 * Request the list of schedules viewable by a User. The list can be filtered by schedule type.
 *         The response is either a UserScheduleGetEventDetailListResponse or an ErrorResponse.
 *
 * @see UserScheduleGetEventDetailListResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:3567","type":"sequence"}]
 */
class UserScheduleGetEventDetailListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3567
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName scheduleGlobalKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3567
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey|null
     */
    private $scheduleGlobalKey = null;

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

    /**
     * Getter for scheduleGlobalKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey
     */
    public function getScheduleGlobalKey()
    {
        return $this->scheduleGlobalKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleGlobalKey;
    }

    /**
     * Setter for scheduleGlobalKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey $scheduleGlobalKey
     * @return $this
     */
    public function setScheduleGlobalKey(\CWM\BroadWorksConnector\Ocip\Models\ScheduleGlobalKey $scheduleGlobalKey)
    {
        $this->scheduleGlobalKey = $scheduleGlobalKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleGlobalKey()
    {
        $this->scheduleGlobalKey = null;
        return $this;
    }


}

