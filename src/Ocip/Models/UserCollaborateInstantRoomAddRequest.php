<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateInstantRoomAddRequest
 *
 * Request to add collaborate instant room.
 *         The response is either a UserCollaborateInstantRoomAddResponse or an
 * ErrorResponse.
 */
class UserCollaborateInstantRoomAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName roomName
     * @var string|null
     */
    private $roomName = null;

    /**
     * @ElementName useRoomIdAsRoomName
     * @var bool|null
     */
    private $useRoomIdAsRoomName = null;

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
     * Getter for roomName
     *
     * @ElementName roomName
     * @return string|null
     */
    public function getRoomName()
    {
        return $this->roomName;
    }

    /**
     * Setter for roomName
     *
     * @ElementName roomName
     * @param string|null $roomName
     * @return $this
     */
    public function setRoomName($roomName)
    {
        $this->roomName = $roomName;
        return $this;
    }

    /**
     * Getter for useRoomIdAsRoomName
     *
     * @ElementName useRoomIdAsRoomName
     * @return bool|null
     */
    public function getUseRoomIdAsRoomName()
    {
        return $this->useRoomIdAsRoomName;
    }

    /**
     * Setter for useRoomIdAsRoomName
     *
     * @ElementName useRoomIdAsRoomName
     * @param bool|null $useRoomIdAsRoomName
     * @return $this
     */
    public function setUseRoomIdAsRoomName($useRoomIdAsRoomName)
    {
        $this->useRoomIdAsRoomName = $useRoomIdAsRoomName;
        return $this;
    }


}

