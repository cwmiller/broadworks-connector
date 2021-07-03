<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateInstantRoomGetResponse
 *
 * Response to UserCollaborateInstantRoomGetRequest.
 *
 * @see UserCollaborateInstantRoomGetRequest
 * @Groups [{"id":"939fd5846dfae8bdf58308d6cb9ebb12:684","type":"sequence"}]
 */
class UserCollaborateInstantRoomGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName roomName
     * @Type string
     * @Optional
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:684
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $roomName = null;

    /**
     * @ElementName instantRoomStartTime
     * @Type string
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:684
     * @var string|null
     */
    private $instantRoomStartTime = null;

    /**
     * @ElementName instantRoomEndTime
     * @Type string
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:684
     * @var string|null
     */
    private $instantRoomEndTime = null;

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


}

