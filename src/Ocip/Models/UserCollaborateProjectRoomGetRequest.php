<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateProjectRoomGetRequest
 *
 * Request collaborate room settings for a project room.
 *         The request fails when requesting collaborate room settings for instant rooms or My Room.
 *         The response is either UserCollaborateProjectRoomGetResponse or
 *         ErrorResponse.
 *
 * @see UserCollaborateProjectRoomGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"1d655a4f2853eddf47018e01b685b65b:685","type":"sequence"}]
 */
class UserCollaborateProjectRoomGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 1d655a4f2853eddf47018e01b685b65b:685
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName roomId
     * @Type string
     * @Group 1d655a4f2853eddf47018e01b685b65b:685
     * @var string|null
     */
    private $roomId = null;

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

