<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTimeScheduleDeleteRequest
 *
 * Delete a system time schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:36312","type":"sequence"}]
 */
class SystemTimeScheduleDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName timeScheduleName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:36312
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

