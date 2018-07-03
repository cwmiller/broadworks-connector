<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGeographicRedundancyUnreachableFromPrimaryGetUserListRequest22
 *
 * Get the list of users that are unreachable from the primary application server.
 *         The response is a
 * SystemGeographicRedundancyUnreachableFromPrimaryGetUserListResponse22 or an
 * ErrorResponse.
 *
 * @see SystemGeographicRedundancyUnreachableFromPrimaryGetUserListResponse22
 * @see ErrorResponse
 */
class SystemGeographicRedundancyUnreachableFromPrimaryGetUserListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userListSizeLimit
     * @var int|null
     */
    private $userListSizeLimit = null;

    /**
     * Getter for userListSizeLimit
     *
     * @ElementName userListSizeLimit
     * @return int|null
     */
    public function getUserListSizeLimit()
    {
        return $this->userListSizeLimit;
    }

    /**
     * Setter for userListSizeLimit
     *
     * @ElementName userListSizeLimit
     * @param int|null $userListSizeLimit
     * @return $this
     */
    public function setUserListSizeLimit($userListSizeLimit)
    {
        $this->userListSizeLimit = $userListSizeLimit;
        return $this;
    }


}

