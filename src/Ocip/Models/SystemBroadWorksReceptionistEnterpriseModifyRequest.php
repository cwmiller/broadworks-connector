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
 * @Groups [{"id":"fb12998f4f9e45cedde01f08569f4c7c:81","type":"sequence"}]
 */
class SystemBroadWorksReceptionistEnterpriseModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName maxMonitoredUsers
     * @Type int
     * @Optional
     * @Group fb12998f4f9e45cedde01f08569f4c7c:81
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

