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
 * @Groups [{"id":"2f13ead3f217ca6eb3f52b517fb04a6f:467","type":"sequence","children":[{"id":"2f13ead3f217ca6eb3f52b517fb04a6f:469","type":"choice"}]}]
 */
class UserCollaborateInstantRoomAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 2f13ead3f217ca6eb3f52b517fb04a6f:467
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName roomName
     * @Type string
     * @Group 2f13ead3f217ca6eb3f52b517fb04a6f:469
     * @var string|null
     */
    private $roomName = null;

    /**
     * @ElementName useRoomIdAsRoomName
     * @Type bool
     * @Group 2f13ead3f217ca6eb3f52b517fb04a6f:469
     * @var bool|null
     */
    private $useRoomIdAsRoomName = null;

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

