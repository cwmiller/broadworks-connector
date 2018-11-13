<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGroupPagingGetListRequest
 *
 * Get the list of all the Paging Groups a user was assigned as an originator.
 *         The response is either a UserGroupPagingGetListResponse or an
 * ErrorResponse.
 *
 * @see UserGroupPagingGetListResponse
 * @see ErrorResponse
 */
class UserGroupPagingGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
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

