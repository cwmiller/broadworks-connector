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

