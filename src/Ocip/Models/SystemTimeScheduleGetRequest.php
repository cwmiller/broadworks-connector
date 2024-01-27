<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTimeScheduleGetRequest
 *
 * Request to get a system time schedule.
 *         The response is either a SystemTimeScheduleGetResponse or an ErrorResponse.
 *
 * @see SystemTimeScheduleGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:36358","type":"sequence"}]
 */
class SystemTimeScheduleGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName timeScheduleName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:36358
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $timeScheduleName = null;

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

