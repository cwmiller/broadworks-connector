<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateProjectRoomGetRequest
 *
 * Request collaborate room settings for a project room.
 *         The request fails when requesting collaborate room settings for instant rooms or My Room.
 *         The response is either UserCollaboratProjectRoomGetResponse or 
 *         ErrorResponse.
 *
 * @see UserCollaboratProjectRoomGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"939fd5846dfae8bdf58308d6cb9ebb12:850","type":"sequence"}]
 */
class UserCollaborateProjectRoomGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:850
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName roomId
     * @Type string
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:850
     * @MinLength 4
     * @MaxLength 15
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

