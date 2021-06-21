<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetSupervisorCallCenterListRequest
 *
 * Get a list of call centers the user is assigned to as a supervisor.
 *         The response is either a UserCallCenterGetSupervisorCallCenterListResponse or an
 *         ErrorResponse.
 *
 * @see UserCallCenterGetSupervisorCallCenterListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:7191","type":"sequence"}]
 */
class UserCallCenterGetSupervisorCallCenterListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName supervisorUserId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:7191
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $supervisorUserId = null;

    /**
     * Getter for supervisorUserId
     *
     * @return string
     */
    public function getSupervisorUserId()
    {
        return $this->supervisorUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supervisorUserId;
    }

    /**
     * Setter for supervisorUserId
     *
     * @param string $supervisorUserId
     * @return $this
     */
    public function setSupervisorUserId($supervisorUserId)
    {
        $this->supervisorUserId = $supervisorUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupervisorUserId()
    {
        $this->supervisorUserId = null;
        return $this;
    }


}

