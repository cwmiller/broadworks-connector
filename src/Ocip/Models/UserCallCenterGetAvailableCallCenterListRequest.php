<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetAvailableCallCenterListRequest
 *
 * This request gets a list of all call centers which the user can be assigned to
 * as an agent. 
 *         Some of the call centers may already have the user as an agent.  It is
 * the clients 
 *         responsibility to discard the call centers that the user is already an
 * agent of.
 *         The response is either a
 * UserCallCenterGetAvailableCallCenterListResponse or an ErrorResponse.
 */
class UserCallCenterGetAvailableCallCenterListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

