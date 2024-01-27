<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateDeleteRoomRequest
 *
 * Request to delete a collaborate room.  The request only applies to project rooms and instant rooms.
 *         The request fails when deleting a collaborate My Room.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"bc805893b9cc7e3e01eec64e9ad62768:614","type":"sequence"}]
 */
class UserCollaborateDeleteRoomRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group bc805893b9cc7e3e01eec64e9ad62768:614
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName roomId
     * @Type string
     * @Group bc805893b9cc7e3e01eec64e9ad62768:614
     * @MinLength 4
     * @MaxLength 15
     * @var string|null
     */
    protected $roomId = null;

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

    /**
     * Getter for roomId
     *
     * @return string
     */
    public function getRoomId()
    {
        return $this->roomId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->roomId;
    }

    /**
     * Setter for roomId
     *
     * @param string $roomId
     * @return $this
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoomId()
    {
        $this->roomId = null;
        return $this;
    }
}

