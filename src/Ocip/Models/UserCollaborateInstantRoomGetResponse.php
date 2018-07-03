<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateInstantRoomGetResponse
 *
 * Response to UserCollaborateInstantRoomGetRequest.
 *
 * @see UserCollaborateInstantRoomGetRequest
 */
class UserCollaborateInstantRoomGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName roomName
     * @var string|null
     */
    private $roomName = null;

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


}

