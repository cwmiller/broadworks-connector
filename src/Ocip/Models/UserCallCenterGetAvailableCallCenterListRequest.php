<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetAvailableCallCenterListRequest
 *
 * This request gets a list of all call centers which the user can be assigned to as an agent. 
 *         Some of the call centers may already have the user as an agent.  It is the clients 
 *         responsibility to discard the call centers that the user is already an agent of.
 *         The response is either a UserCallCenterGetAvailableCallCenterListResponse or an ErrorResponse.
 *
 * @see UserCallCenterGetAvailableCallCenterListResponse
 * @see ErrorResponse
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:6264","type":"sequence"}]
 */
class UserCallCenterGetAvailableCallCenterListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6264
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }


}

