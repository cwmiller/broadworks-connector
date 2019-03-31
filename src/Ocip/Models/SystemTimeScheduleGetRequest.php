<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTimeScheduleGetRequest
 *
 * Request to get a system time schedule.
 *                 The response is either a SystemTimeScheduleGetResponse or an ErrorResponse.
 *
 * @see SystemTimeScheduleGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:16515","type":"sequence"}]
 */
class SystemTimeScheduleGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName timeScheduleName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16515
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $timeScheduleName = null;

    /**
     * Getter for timeScheduleName
     *
     * @return string
     */
    public function getTimeScheduleName()
    {
        return $this->timeScheduleName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeScheduleName;
    }

    /**
     * Setter for timeScheduleName
     *
     * @param string $timeScheduleName
     * @return $this
     */
    public function setTimeScheduleName($timeScheduleName)
    {
        $this->timeScheduleName = $timeScheduleName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeScheduleName()
    {
        $this->timeScheduleName = null;
        return $this;
    }


}

