<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHotelingGuestGetRequest14sp4
 *
 * Request the user level data associated with Hoteling Guest.
 *         The response is either a UserHotelingGuestGetResponse14sp4 or an ErrorResponse.
 *
 * @see UserHotelingGuestGetResponse14sp4
 * @see ErrorResponse
 * @Groups [{"id":"b3a47d1de480374e33d6efb9aa2bd2d0:83","type":"sequence"}]
 */
class UserHotelingGuestGetRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group b3a47d1de480374e33d6efb9aa2bd2d0:83
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

