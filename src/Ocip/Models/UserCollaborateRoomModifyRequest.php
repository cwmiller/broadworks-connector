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
 * @Groups [{"id":"bc805893b9cc7e3e01eec64e9ad62768:1033","type":"sequence"}]
 */
class UserCollaborateRoomModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group bc805893b9cc7e3e01eec64e9ad62768:1033
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName roomId
     * @Type string
     * @Group bc805893b9cc7e3e01eec64e9ad62768:1033
     * @MinLength 4
     * @MaxLength 15
     * @var string|null
     */
    protected $roomId = null;

    /**
     * @ElementName roomName
     * @Type string
     * @Optional
     * @Group bc805893b9cc7e3e01eec64e9ad62768:1033
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $roomName = null;

    /**
     * @ElementName attendeeNotification
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomAttendeeNotification
     * @Optional
     * @Group bc805893b9cc7e3e01eec64e9ad62768:1033
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomAttendeeNotification|null
     */
    protected $attendeeNotification = null;

    /**
     * @ElementName endCollaborateRoomSessionOnOwnerExit
     * @Type bool
     * @Optional
     * @Group bc805893b9cc7e3e01eec64e9ad62768:1033
     * @var bool|null
     */
    protected $endCollaborateRoomSessionOnOwnerExit = null;

    /**
     * @ElementName ownerRequired
     * @Type bool
     * @Optional
     * @Group bc805893b9cc7e3e01eec64e9ad62768:1033
     * @var bool|null
     */
    protected $ownerRequired = null;

    /**
     * @ElementName roomSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule
     * @Optional
     * @Group bc805893b9cc7e3e01eec64e9ad62768:1033
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule|null
     */
    protected $roomSchedule = null;

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
     * Getter for attendeeNotification
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomAttendeeNotification
     */
    public function getAttendeeNotification()
    {
        return $this->attendeeNotification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->attendeeNotification;
    }

    /**
     * Setter for attendeeNotification
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomAttendeeNotification $attendeeNotification
     * @return $this
     */
    public function setAttendeeNotification(\CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomAttendeeNotification $attendeeNotification)
    {
        $this->attendeeNotification = $attendeeNotification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAttendeeNotification()
    {
        $this->attendeeNotification = null;
        return $this;
    }

    /**
     * Getter for endCollaborateRoomSessionOnOwnerExit
     *
     * @return bool
     */
    public function getEndCollaborateRoomSessionOnOwnerExit()
    {
        return $this->endCollaborateRoomSessionOnOwnerExit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endCollaborateRoomSessionOnOwnerExit;
    }

    /**
     * Setter for endCollaborateRoomSessionOnOwnerExit
     *
     * @param bool $endCollaborateRoomSessionOnOwnerExit
     * @return $this
     */
    public function setEndCollaborateRoomSessionOnOwnerExit($endCollaborateRoomSessionOnOwnerExit)
    {
        $this->endCollaborateRoomSessionOnOwnerExit = $endCollaborateRoomSessionOnOwnerExit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndCollaborateRoomSessionOnOwnerExit()
    {
        $this->endCollaborateRoomSessionOnOwnerExit = null;
        return $this;
    }

    /**
     * Getter for ownerRequired
     *
     * @return bool
     */
    public function getOwnerRequired()
    {
        return $this->ownerRequired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ownerRequired;
    }

    /**
     * Setter for ownerRequired
     *
     * @param bool $ownerRequired
     * @return $this
     */
    public function setOwnerRequired($ownerRequired)
    {
        $this->ownerRequired = $ownerRequired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOwnerRequired()
    {
        $this->ownerRequired = null;
        return $this;
    }

    /**
     * Getter for roomSchedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule
     */
    public function getRoomSchedule()
    {
        return $this->roomSchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->roomSchedule;
    }

    /**
     * Setter for roomSchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule $roomSchedule
     * @return $this
     */
    public function setRoomSchedule(\CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule $roomSchedule)
    {
        $this->roomSchedule = $roomSchedule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoomSchedule()
    {
        $this->roomSchedule = null;
        return $this;
    }
}

