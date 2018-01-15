<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGroupPagingGetListRequest
 *
 * Get the list of all the Paging Groups a user was assigned as an originator.
 *         The response is either a UserGroupPagingGetListResponse or an
 * ErrorResponse.
 */
class UserGroupPagingGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

