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
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:1091","type":"sequence"}]
 */
class GroupAdminGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:1091
     * @MinLength 1
     * @MaxLength 161
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

