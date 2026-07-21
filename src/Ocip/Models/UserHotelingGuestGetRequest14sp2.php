<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHotelingGuestGetRequest14sp2
 *
 * Request the user level data associated with Hoteling Guest.
 *         The response is either a UserHotelingGuestGetResponse14 or an ErrorResponse.
 *         Replaced by: UserHotelingGuestGetRequest14sp4
 *
 * @see UserHotelingGuestGetResponse14
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:49993","type":"sequence"}]
 */
class UserHotelingGuestGetRequest14sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:49993
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

