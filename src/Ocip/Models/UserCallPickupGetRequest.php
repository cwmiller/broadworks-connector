<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallPickupGetRequest
 *
 * Gets the details of the Call Pickup group that a user belongs to (if any).
 *         Any user can only belong to one Call Pickup group.
 *         The response is either UserCallPickupGetResponse or ErrorResponse.
 *
 * @see UserCallPickupGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"e52f623f7e5f77c5ed7bb6ba0012d5cd:376","type":"sequence"}]
 */
class UserCallPickupGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group e52f623f7e5f77c5ed7bb6ba0012d5cd:376
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

