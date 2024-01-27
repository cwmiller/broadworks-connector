<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetAvailablePortalListRequest21sp1
 *
 * Get a list of all the available BroadWorks Anywhere portal instances for a specific user
 *         The response is either UserBroadWorksAnywhereGetAvailablePortalListResponse21sp1 or ErrorResponse.
 *
 * @see UserBroadWorksAnywhereGetAvailablePortalListResponse21sp1
 * @see ErrorResponse
 * @Groups [{"id":"f39163d0e42e05c4a1692a62f625df9f:359","type":"sequence"}]
 */
class UserBroadWorksAnywhereGetAvailablePortalListRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group f39163d0e42e05c4a1692a62f625df9f:359
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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

