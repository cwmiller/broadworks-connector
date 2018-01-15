<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHotelingGuestGetRequest14sp2
 *
 * Request the user level data associated with Hoteling Guest.
 *         The response is either a UserHotelingGuestGetResponse14 or an
 * ErrorResponse.
 *         Replaced by: UserHotelingGuestGetRequest14sp4
 */
class UserHotelingGuestGetRequest14sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

