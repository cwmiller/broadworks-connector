<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetAvailablePortalListRequest
 *
 * Get a list of all the available BroadWorks Anywhere portal instances for a specific user
 *         The response is either UserBroadWorksAnywhereGetAvailablePortalListResponse or ErrorResponse.
 *         Replaced by UserBroadWorksAnywhereGetAvailablePortalListRequest21sp1
 *
 * @see UserBroadWorksAnywhereGetAvailablePortalListResponse
 * @see ErrorResponse
 * @see UserBroadWorksAnywhereGetAvailablePortalListRequest21sp1
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:16695","type":"sequence"}]
 */
class UserBroadWorksAnywhereGetAvailablePortalListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:16695
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

