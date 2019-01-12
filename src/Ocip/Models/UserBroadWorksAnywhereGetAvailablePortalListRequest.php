<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetAvailablePortalListRequest
 *
 * Get a list of all the available BroadWorks Anywhere portal instances for a specific user
 *         The response is either UserBroadWorksAnywhereGetAvailableListResponse or ErrorResponse.
 *         Replaced by UserBroadWorksAnywhereGetAvailablePortalListRequest21sp1
 *
 * @see UserBroadWorksAnywhereGetAvailableListResponse
 * @see ErrorResponse
 * @see UserBroadWorksAnywhereGetAvailablePortalListRequest21sp1
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:7180","type":"sequence"}]
 */
class UserBroadWorksAnywhereGetAvailablePortalListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:7180
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

