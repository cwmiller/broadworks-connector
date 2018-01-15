<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetBridgeListRequest
 *
 * Get the list of Meet-Me Conferencing bridges for which the user is a host.
 *         The response is either UserMeetMeConferencingGetBridgeListResponse or
 * ErrorResponse.
 */
class UserMeetMeConferencingGetBridgeListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

