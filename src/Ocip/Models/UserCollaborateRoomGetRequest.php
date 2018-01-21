<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateRoomGetRequest
 *
 * Request to get the settings for My Room, Instant Room or Project Room.
 *       The roomType and roomName parameters are returned for all rooms.
 *       For My room and Project Room, the following parameters are returned: 
 *       attendeeNotification, endRoomSessionOnOwnerExit and ownerRequired.
 *       In addition, the roomSchedule is returned for Project Room and
 *       the roomStartTime and roomEndTime are returned for Instant Room. 
 *         The response is either UserCollaboratetRoomGetResponse or 
 *         ErrorResponse.
 */
class UserCollaborateRoomGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName roomId
     * @var string|null
     */
    private $roomId = null;

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

    /**
     * Getter for roomId
     *
     * @ElementName roomId
     * @return string|null
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * Setter for roomId
     *
     * @ElementName roomId
     * @param string|null $roomId
     * @return $this
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;
        return $this;
    }


}

