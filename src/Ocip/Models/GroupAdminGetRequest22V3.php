<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetRequest22V3
 *
 * Get a group administrators profile.
 *         The response is either a GroupAdminGetResponse22V3 or an ErrorResponse.
 *
 * @see GroupAdminGetResponse22V3
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:1681","type":"sequence"}]
 */
class GroupAdminGetRequest22V3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:1681
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

