<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksReceptionistEnterpriseGetResponse
 *
 * Response to SystemBroadWorksReceptionistEnterpriseGetRequest.
 *         Contains a list of BroadWorks Receptionist - Enterprise parameters.
 *
 * @see SystemBroadWorksReceptionistEnterpriseGetRequest
 * @Groups [{"id":"44477d346d2631b033071e12af214ac8:65","type":"sequence"}]
 */
class SystemBroadWorksReceptionistEnterpriseGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName maxMonitoredUsers
     * @Type int
     * @Group 44477d346d2631b033071e12af214ac8:65
     * @MinInclusive 1
     * @MaxInclusive 1000
     * @var int|null
     */
    protected $maxMonitoredUsers = null;

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

