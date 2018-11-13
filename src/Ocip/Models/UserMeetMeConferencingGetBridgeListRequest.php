<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetBridgeListRequest
 *
 * Get the list of Meet-Me Conferencing bridges for which the user is a host.
 *         The response is either UserMeetMeConferencingGetBridgeListResponse or
 * ErrorResponse.
 *
 * @see UserMeetMeConferencingGetBridgeListResponse
 * @see ErrorResponse
 */
class UserMeetMeConferencingGetBridgeListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
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

