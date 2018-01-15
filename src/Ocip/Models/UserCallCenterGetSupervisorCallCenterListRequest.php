<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetSupervisorCallCenterListRequest
 *
 * Get a list of call centers the user is assigned to as a supervisor.
 *         The response is either a
 * UserCallCenterGetSupervisorCallCenterListResponse or an
 *         ErrorResponse.
 */
class UserCallCenterGetSupervisorCallCenterListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName supervisorUserId
     * @var string|null
     */
    private $supervisorUserId = null;

    /**
     * Getter for supervisorUserId
     *
     * @ElementName supervisorUserId
     * @return string|null
     */
    public function getSupervisorUserId()
    {
        return $this->supervisorUserId;
    }

    /**
     * Setter for supervisorUserId
     *
     * @ElementName supervisorUserId
     * @param string|null $supervisorUserId
     * @return $this
     */
    public function setSupervisorUserId($supervisorUserId)
    {
        $this->supervisorUserId = $supervisorUserId;
        return $this;
    }


}

