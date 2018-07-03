<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetRequest
 *
 * Get a group administrators profile.
 *         The response is either a GroupAdminGetResponse or an ErrorResponse.
 *         Replaced by GroupAdminGetRequest21sp1.
 *
 * @see GroupAdminGetResponse
 * @see ErrorResponse
 * @see GroupAdminGetRequest21sp1
 */
class GroupAdminGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

