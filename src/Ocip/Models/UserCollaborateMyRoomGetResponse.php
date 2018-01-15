<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateMyRoomGetResponse
 *
 * Response to UserCollaborateMyRoomGetRequest.
 */
class UserCollaborateMyRoomGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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


}

