<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemScheduleDeleteListRequest
 *
 * Delete a list of system schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:15906","type":"sequence"}]
 */
class SystemScheduleDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName scheduleKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:15906
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey[]
     */
    protected $scheduleKey = [
        
    ];

    /**
     * Getter for scheduleKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey[]
     */
    public function getScheduleKey()
    {
        return $this->scheduleKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleKey;
    }

    /**
     * Setter for scheduleKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey[] $scheduleKey
     * @return $this
     */
    public function setScheduleKey(array $scheduleKey)
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
     * Adder for scheduleKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey $scheduleKey
     * @return $this
     */
    public function addScheduleKey($scheduleKey)
    {
        $this->scheduleKey[] = $scheduleKey;
        return $this;
    }
}

