<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetAvailablePortalListRequest21sp1
 *
 * Get a list of all the available BroadWorks Anywhere portal instances for a
 * specific user
 *         The response is either
 * UserBroadWorksAnywhereGetAvailablePortalListResponse21sp1 or ErrorResponse.
 *
 * @see UserBroadWorksAnywhereGetAvailablePortalListResponse21sp1
 * @see ErrorResponse
 */
class UserBroadWorksAnywhereGetAvailablePortalListRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

