<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAssignedServicesGetListRequest
 *
 * Get the list of assigned User and Group Services for the specified user.
 *         The response is either an UserAssignedServicesGetListResponse or an
 * ErrorResponse.
 */
class UserAssignedServicesGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

