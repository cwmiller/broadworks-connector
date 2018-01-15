<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAttendantConsoleModifyRequest
 *
 * Modify Attendant Console settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAttendantConsoleModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName maxMonitoredUsers
     * @var int|null
     */
    private $maxMonitoredUsers = null;

    /**
     * Getter for maxMonitoredUsers
     *
     * @ElementName maxMonitoredUsers
     * @return int|null
     */
    public function getMaxMonitoredUsers()
    {
        return $this->maxMonitoredUsers;
    }

    /**
     * Setter for maxMonitoredUsers
     *
     * @ElementName maxMonitoredUsers
     * @param int|null $maxMonitoredUsers
     * @return $this
     */
    public function setMaxMonitoredUsers($maxMonitoredUsers)
    {
        $this->maxMonitoredUsers = $maxMonitoredUsers;
        return $this;
    }


}

