<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetRequest22
 *
 * Get a group administrators profile.
 *         The response is either a GroupAdminGetResponse22 or an ErrorResponse.
 *         Replaced by: GroupAdminGetRequest22V2
 *
 * @see GroupAdminGetResponse22
 * @see ErrorResponse
 * @see GroupAdminGetRequest22V2
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:1491","type":"sequence"}]
 */
class GroupAdminGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:1491
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

