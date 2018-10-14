<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateRoomGetResponse
 *
 * Response to UserCollaborateRoomGetRequest.
 *           The roomType and roomName parameters are returned for all rooms.
 *           The following parameters are returned for My room and Project Room:
 *           attendeeNotification, endCollaborateRoomSessionOnOwnerExit and 
 *           ownerRequired. In addition, the roomSchedule is returned for 
 *           Project Room and the instantRoomStartTime and instantRoomEndTime 
 *           are returned for Instant Room.
 *
 * @see UserCollaborateRoomGetRequest
 */
class UserCollaborateRoomGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName roomType
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomType|null
     */
    private $roomType = null;

    /**
     * @ElementName roomName
     * @var string|null
     */
    private $roomName = null;

    /**
     * @ElementName attendeeNotification
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomAttendeeNotification|null
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
     * @ElementName instantRoomStartTime
     * @var string|null
     */
    private $instantRoomStartTime = null;

    /**
     * @ElementName instantRoomEndTime
     * @var string|null
     */
    private $instantRoomEndTime = null;

    /**
     * @ElementName roomSchedule
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule|null
     */
    private $roomSchedule = null;

    /**
     * Getter for roomType
     *
     * @ElementName roomType
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomType|null
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Setter for roomType
     *
     * @ElementName roomType
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomType|null $roomType
     * @return $this
     */
    public function setRoomType(\CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomType $roomType)
    {
        $this->roomType = $roomType;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomAttendeeNotification|null
     */
    public function getAttendeeNotification()
    {
        return $this->attendeeNotification;
    }

    /**
     * Setter for attendeeNotification
     *
     * @ElementName attendeeNotification
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomAttendeeNotification|null $attendeeNotification
     * @return $this
     */
    public function setAttendeeNotification(\CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomAttendeeNotification $attendeeNotification)
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
     * Getter for instantRoomStartTime
     *
     * @ElementName instantRoomStartTime
     * @return string|null
     */
    public function getInstantRoomStartTime()
    {
        return $this->instantRoomStartTime;
    }

    /**
     * Setter for instantRoomStartTime
     *
     * @ElementName instantRoomStartTime
     * @param string|null $instantRoomStartTime
     * @return $this
     */
    public function setInstantRoomStartTime($instantRoomStartTime)
    {
        $this->instantRoomStartTime = $instantRoomStartTime;
        return $this;
    }

    /**
     * Getter for instantRoomEndTime
     *
     * @ElementName instantRoomEndTime
     * @return string|null
     */
    public function getInstantRoomEndTime()
    {
        return $this->instantRoomEndTime;
    }

    /**
     * Setter for instantRoomEndTime
     *
     * @ElementName instantRoomEndTime
     * @param string|null $instantRoomEndTime
     * @return $this
     */
    public function setInstantRoomEndTime($instantRoomEndTime)
    {
        $this->instantRoomEndTime = $instantRoomEndTime;
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
    public function setRoomSchedule(\CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule $roomSchedule)
    {
        $this->roomSchedule = $roomSchedule;
        return $this;
    }


}

