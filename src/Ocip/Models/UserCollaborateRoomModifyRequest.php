<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateRoomModifyRequest
 *
 * Request to modify room settings for a specific Project Room or My Room.
 *         Request to modify room settings for a specific Instant Room is responded
 *         with an ErrorResponse. The roomSchedule parameter is applicable for
 *         Project Room only. If the roomSchedule parameter is specified in the
 *         request to modify My Room, the request will be failed.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see ErrorResponse
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserCollaborateRoomModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName roomName
     * @var string|null
     */
    private $roomName = null;

    /**
     * @ElementName attendeeNotification
     * @var string|null
     */
    private $attendeeNotification = null;

    /**
     * @ElementName endCollaborateRoomSessionOnOwnerExit
     * @var bool|null
     */
    private $endCollaborateRoomSessionOnOwnerExit = null;

    /**
     * @ElementName ownerRequired
     * @var bool|null
     */
    private $ownerRequired = null;

    /**
     * @ElementName roomSchedule
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule|null
     */
    private $roomSchedule = null;

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
     * Getter for attendeeNotification
     *
     * @ElementName attendeeNotification
     * @return string|null
     */
    public function getAttendeeNotification()
    {
        return $this->attendeeNotification;
    }

    /**
     * Setter for attendeeNotification
     *
     * @ElementName attendeeNotification
     * @param string|null $attendeeNotification
     * @return $this
     */
    public function setAttendeeNotification($attendeeNotification)
    {
        $this->attendeeNotification = $attendeeNotification;
        return $this;
    }

    /**
     * Getter for endCollaborateRoomSessionOnOwnerExit
     *
     * @ElementName endCollaborateRoomSessionOnOwnerExit
     * @return bool|null
     */
    public function getEndCollaborateRoomSessionOnOwnerExit()
    {
        return $this->endCollaborateRoomSessionOnOwnerExit;
    }

    /**
     * Setter for endCollaborateRoomSessionOnOwnerExit
     *
     * @ElementName endCollaborateRoomSessionOnOwnerExit
     * @param bool|null $endCollaborateRoomSessionOnOwnerExit
     * @return $this
     */
    public function setEndCollaborateRoomSessionOnOwnerExit($endCollaborateRoomSessionOnOwnerExit)
    {
        $this->endCollaborateRoomSessionOnOwnerExit = $endCollaborateRoomSessionOnOwnerExit;
        return $this;
    }

    /**
     * Getter for ownerRequired
     *
     * @ElementName ownerRequired
     * @return bool|null
     */
    public function getOwnerRequired()
    {
        return $this->ownerRequired;
    }

    /**
     * Setter for ownerRequired
     *
     * @ElementName ownerRequired
     * @param bool|null $ownerRequired
     * @return $this
     */
    public function setOwnerRequired($ownerRequired)
    {
        $this->ownerRequired = $ownerRequired;
        return $this;
    }

    /**
     * Getter for roomSchedule
     *
     * @ElementName roomSchedule
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule|null
     */
    public function getRoomSchedule()
    {
        return $this->roomSchedule;
    }

    /**
     * Setter for roomSchedule
     *
     * @ElementName roomSchedule
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule|null $roomSchedule
     * @return $this
     */
    public function setRoomSchedule($roomSchedule)
    {
        $this->roomSchedule = $roomSchedule;
        return $this;
    }


}

