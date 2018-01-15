<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTimeScheduleGetRequest
 *
 * Request to get a system time schedule.
 *         The response is either a SystemTimeScheduleGetResponse or an
 * ErrorResponse.
 */
class SystemTimeScheduleGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName timeScheduleName
     * @var string|null
     */
    private $timeScheduleName = null;

    /**
     * Getter for timeScheduleName
     *
     * @ElementName timeScheduleName
     * @return string|null
     */
    public function getTimeScheduleName()
    {
        return $this->timeScheduleName;
    }

    /**
     * Setter for timeScheduleName
     *
     * @ElementName timeScheduleName
     * @param string|null $timeScheduleName
     * @return $this
     */
    public function setTimeScheduleName($timeScheduleName)
    {
        $this->timeScheduleName = $timeScheduleName;
        return $this;
    }


}

