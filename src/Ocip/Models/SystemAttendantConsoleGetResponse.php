<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAttendantConsoleGetResponse
 *
 * Response to SystemAttendantConsoleGetRequest.
 *         Contains a list of Attendant Console parameters.
 */
class SystemAttendantConsoleGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

