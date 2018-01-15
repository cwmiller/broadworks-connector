<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksReceptionistEnterpriseGetResponse
 *
 * Response to SystemBroadWorksReceptionistEnterpriseGetRequest.
 *         Contains a list of BroadWorks Receptionist - Enterprise parameters.
 */
class SystemBroadWorksReceptionistEnterpriseGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

