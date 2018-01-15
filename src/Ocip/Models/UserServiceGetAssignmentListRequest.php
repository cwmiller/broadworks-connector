<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserServiceGetAssignmentListRequest
 *
 * Requests the user's service and service pack assignment list with status.
 *         The response is either UserServiceGetAssignmentListResponse or
 * ErrorResponse.
 */
class UserServiceGetAssignmentListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

