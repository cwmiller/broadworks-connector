<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRoutePointSupervisorGetListRequest
 *
 * Get a list of Route Point supervisors assigned to a user.
 *         The response is either a
 *         UserRoutePointSupervisorGetListResponse or an ErrorResponse.
 *
 * @see UserRoutePointSupervisorGetListResponse
 * @see ErrorResponse
 */
class UserRoutePointSupervisorGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

