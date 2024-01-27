<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleAddRequest
 *
 * Add a user schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:3559","type":"sequence"}]
 */
class UserScheduleAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3559
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName scheduleName
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3559
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $scheduleName = null;

    /**
     * @ElementName scheduleType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleType
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3559
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
     * Getter for scheduleName
     *
     * @return string
     */
    public function getScheduleName()
    {
        return $this->scheduleName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleName;
    }

    /**
     * Setter for scheduleName
     *
     * @param string $scheduleName
     * @return $this
     */
    public function setScheduleName($scheduleName)
    {
        $this->scheduleName = $scheduleName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleName()
    {
        $this->scheduleName = null;
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

