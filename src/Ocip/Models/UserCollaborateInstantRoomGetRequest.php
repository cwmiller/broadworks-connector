<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateInstantRoomGetRequest
 *
 * Request the collaborate room settings for an instant room.
 *         The request fails when requesting collaborate room settings for My Room
 * or project rooms.
 *         The response is either UserCollaboratInstantRoomGetResponse or 
 *         ErrorResponse.
 */
class UserCollaborateInstantRoomGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

