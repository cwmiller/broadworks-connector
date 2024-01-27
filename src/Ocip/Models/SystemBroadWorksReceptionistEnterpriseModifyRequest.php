<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksReceptionistEnterpriseModifyRequest
 *
 * Request to modify BroadWorks Receptionist - Enterprise settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"44477d346d2631b033071e12af214ac8:81","type":"sequence"}]
 */
class SystemBroadWorksReceptionistEnterpriseModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName maxMonitoredUsers
     * @Type int
     * @Optional
     * @Group 44477d346d2631b033071e12af214ac8:81
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

