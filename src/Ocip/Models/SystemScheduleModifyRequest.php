<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemScheduleModifyRequest
 *
 * Modify a system schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16059","type":"sequence"}]
 */
class SystemScheduleModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName scheduleKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey
     * @Group da582a1f8028404e70d260cf1f891033:16059
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey|null
     */
    protected $scheduleKey = null;

    /**
     * @ElementName newScheduleName
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16059
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $newScheduleName = null;

    /**
     * Getter for scheduleKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey
     */
    public function getScheduleKey()
    {
        return $this->scheduleKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleKey;
    }

    /**
     * Setter for scheduleKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey $scheduleKey
     * @return $this
     */
    public function setScheduleKey(\CWM\BroadWorksConnector\Ocip\Models\ScheduleKey $scheduleKey)
    {
        $this->scheduleKey = $scheduleKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleKey()
    {
        $this->scheduleKey = null;
        return $this;
    }

    /**
     * Getter for newScheduleName
     *
     * @return string
     */
    public function getNewScheduleName()
    {
        return $this->newScheduleName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newScheduleName;
    }

    /**
     * Setter for newScheduleName
     *
     * @param string $newScheduleName
     * @return $this
     */
    public function setNewScheduleName($newScheduleName)
    {
        $this->newScheduleName = $newScheduleName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewScheduleName()
    {
        $this->newScheduleName = null;
        return $this;
    }
}

