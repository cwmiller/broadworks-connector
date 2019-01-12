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
 * @Groups [{"id":"939fd5846dfae8bdf58308d6cb9ebb12:936","type":"sequence"}]
 */
class UserCollaborateRoomGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName roomType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomType
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:936
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomType|null
     */
    private $roomType = null;

    /**
     * @ElementName roomName
     * @Type string
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:936
     * @var string|null
     */
    private $roomName = null;

    /**
     * @ElementName attendeeNotification
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomAttendeeNotification
     * @Optional
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:936
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomAttendeeNotification|null
     */
    private $attendeeNotification = null;

    /**
     * @ElementName endCollaborateRoomSessionOnOwnerExit
     * @Type bool
     * @Optional
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:936
     * @var bool|null
     */
    private $endCollaborateRoomSessionOnOwnerExit = null;

    /**
     * @ElementName ownerRequired
     * @Type bool
     * @Optional
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:936
     * @var bool|null
     */
    private $ownerRequired = null;

    /**
     * @ElementName instantRoomStartTime
     * @Type string
     * @Optional
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:936
     * @var string|null
     */
    private $instantRoomStartTime = null;

    /**
     * @ElementName instantRoomEndTime
     * @Type string
     * @Optional
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:936
     * @var string|null
     */
    private $instantRoomEndTime = null;

    /**
     * @ElementName roomSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule
     * @Optional
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:936
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomSchedule|null
     */
    private $roomSchedule = null;

    /**
     * Getter for roomType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomType
     */
    public function getRoomType()
    {
        return $this->roomType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->roomType;
    }

    /**
     * Setter for roomType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomType $roomType
     * @return $this
     */
    public function setRoomType(\CWM\BroadWorksConnector\Ocip\Models\CollaborateRoomType $roomType)
    {
        $this->roomType = $roomType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoomType()
    {
        $this->roomType = null;
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
     * Getter for instantRoomStartTime
     *
     * @return string
     */
    public function getInstantRoomStartTime()
    {
        return $this->instantRoomStartTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->instantRoomStartTime;
    }

    /**
     * Setter for instantRoomStartTime
     *
     * @param string $instantRoomStartTime
     * @return $this
     */
    public function setInstantRoomStartTime($instantRoomStartTime)
    {
        $this->instantRoomStartTime = $instantRoomStartTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInstantRoomStartTime()
    {
        $this->instantRoomStartTime = null;
        return $this;
    }

    /**
     * Getter for instantRoomEndTime
     *
     * @return string
     */
    public function getInstantRoomEndTime()
    {
        return $this->instantRoomEndTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->instantRoomEndTime;
    }

    /**
     * Setter for instantRoomEndTime
     *
     * @param string $instantRoomEndTime
     * @return $this
     */
    public function setInstantRoomEndTime($instantRoomEndTime)
    {
        $this->instantRoomEndTime = $instantRoomEndTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInstantRoomEndTime()
    {
        $this->instantRoomEndTime = null;
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

