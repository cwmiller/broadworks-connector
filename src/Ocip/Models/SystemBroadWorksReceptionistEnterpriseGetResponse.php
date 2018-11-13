<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksReceptionistEnterpriseGetResponse
 *
 * Response to SystemBroadWorksReceptionistEnterpriseGetRequest.
 *         Contains a list of BroadWorks Receptionist - Enterprise parameters.
 *
 * @see SystemBroadWorksReceptionistEnterpriseGetRequest
 */
class SystemBroadWorksReceptionistEnterpriseGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maxMonitoredUsers
     * @Type int
     * @var int|null
     */
    private $maxMonitoredUsers = null;

    /**
     * Getter for maxMonitoredUsers
     *
     * @return int
     */
    public function getMaxMonitoredUsers()
    {
        return $this->maxMonitoredUsers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxMonitoredUsers;
    }

    /**
     * Setter for maxMonitoredUsers
     *
     * @param int $maxMonitoredUsers
     * @return $this
     */
    public function setMaxMonitoredUsers($maxMonitoredUsers)
    {
        $this->maxMonitoredUsers = $maxMonitoredUsers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxMonitoredUsers()
    {
        $this->maxMonitoredUsers = null;
        return $this;
    }


}

