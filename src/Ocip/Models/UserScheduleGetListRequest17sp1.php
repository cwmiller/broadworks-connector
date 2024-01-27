<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleGetListRequest17sp1
 *
 * Get the list of schedules viewable by a User. The list can be filtered by schedule type.
 *         The response is either a UserScheduleGetListResponse17sp1 or an ErrorResponse.
 *         This command is authorized to user who is Executive-Assistant of the Executive.
 *
 * @see UserScheduleGetListResponse17sp1
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:3722","type":"sequence"}]
 */
class UserScheduleGetListRequest17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3722
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName scheduleType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleType
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3722
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleType|null
     */
    protected $scheduleType = null;

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
     * Getter for scheduleType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleType
     */
    public function getScheduleType()
    {
        return $this->scheduleType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleType;
    }

    /**
     * Setter for scheduleType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleType $scheduleType
     * @return $this
     */
    public function setScheduleType(\CWM\BroadWorksConnector\Ocip\Models\ScheduleType $scheduleType)
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleType()
    {
        $this->scheduleType = null;
        return $this;
    }
}

