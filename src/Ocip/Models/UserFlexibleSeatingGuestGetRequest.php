<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFlexibleSeatingGuestGetRequest
 *
 * Request the user level data associated with flexible seating guest.
 *         The response is either a UserFlexibleSeatingGuestGetResponse or an
 * ErrorResponse.
 */
class UserFlexibleSeatingGuestGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

