<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateInstantRoomAddRequest
 *
 * Request to add collaborate instant room.
 *         The response is either a UserCollaborateInstantRoomAddResponse or an ErrorResponse.
 *
 * @see UserCollaborateInstantRoomAddResponse
 * @see ErrorResponse
 * @Groups [{"id":"bc805893b9cc7e3e01eec64e9ad62768:631","type":"sequence","children":[{"id":"bc805893b9cc7e3e01eec64e9ad62768:633","type":"choice"}]}]
 */
class UserCollaborateInstantRoomAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group bc805893b9cc7e3e01eec64e9ad62768:631
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName roomName
     * @Type string
     * @Group bc805893b9cc7e3e01eec64e9ad62768:633
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $roomName = null;

    /**
     * @ElementName useRoomIdAsRoomName
     * @Type bool
     * @Group bc805893b9cc7e3e01eec64e9ad62768:633
     * @var bool|null
     */
    protected $useRoomIdAsRoomName = null;

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
     * Getter for roomName
     *
     * @return string
     */
    public function getRoomName()
    {
        return $this->roomName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->roomName;
    }

    /**
     * Setter for roomName
     *
     * @param string $roomName
     * @return $this
     */
    public function setRoomName($roomName)
    {
        $this->roomName = $roomName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoomName()
    {
        $this->roomName = null;
        return $this;
    }

    /**
     * Getter for useRoomIdAsRoomName
     *
     * @return bool
     */
    public function getUseRoomIdAsRoomName()
    {
        return $this->useRoomIdAsRoomName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useRoomIdAsRoomName;
    }

    /**
     * Setter for useRoomIdAsRoomName
     *
     * @param bool $useRoomIdAsRoomName
     * @return $this
     */
    public function setUseRoomIdAsRoomName($useRoomIdAsRoomName)
    {
        $this->useRoomIdAsRoomName = $useRoomIdAsRoomName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseRoomIdAsRoomName()
    {
        $this->useRoomIdAsRoomName = null;
        return $this;
    }
}

