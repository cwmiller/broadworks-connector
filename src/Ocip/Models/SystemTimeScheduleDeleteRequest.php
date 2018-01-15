<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTimeScheduleDeleteRequest
 *
 * Delete a system time schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTimeScheduleDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

