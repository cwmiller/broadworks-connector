<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMigratedUsersGetListRequest22
 *
 * Get a list of migrated users.
 *         If the optional parameter userListSizeLimit is set, then the list
 * returned in the response will contain entries up to value of userListSizeLimit.
 *         The response is either SystemMigratedUsersGetListResponse22 or
 * ErrorResponse.
 *
 * @see SystemMigratedUsersGetListResponse22
 * @see ErrorResponse
 */
class SystemMigratedUsersGetListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userListSizeLimit
     * @Type int
     * @var int|null
     */
    private $userListSizeLimit = null;

    /**
     * Getter for userListSizeLimit
     *
     * @return int
     */
    public function getUserListSizeLimit()
    {
        return $this->userListSizeLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userListSizeLimit;
    }

    /**
     * Setter for userListSizeLimit
     *
     * @param int $userListSizeLimit
     * @return $this
     */
    public function setUserListSizeLimit($userListSizeLimit)
    {
        $this->userListSizeLimit = $userListSizeLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserListSizeLimit()
    {
        $this->userListSizeLimit = null;
        return $this;
    }


}

