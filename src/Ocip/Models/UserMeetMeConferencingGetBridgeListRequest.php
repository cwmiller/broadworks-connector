<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMeetMeConferencingGetBridgeListRequest
 *
 * Get the list of Meet-Me Conferencing bridges for which the user is a host.
 *         The response is either UserMeetMeConferencingGetBridgeListResponse or ErrorResponse.
 *
 * @see UserMeetMeConferencingGetBridgeListResponse
 * @see ErrorResponse
 * @Groups [{"id":"7a29c84abb8473449085e6657fc6948d:580","type":"sequence"}]
 */
class UserMeetMeConferencingGetBridgeListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 7a29c84abb8473449085e6657fc6948d:580
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

