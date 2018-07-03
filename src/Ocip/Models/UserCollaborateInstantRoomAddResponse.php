<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateInstantRoomAddResponse
 *
 * Response to UserCollaborateInstantRoomAddRequest.
 *
 * @see UserCollaborateInstantRoomAddRequest
 */
class UserCollaborateInstantRoomAddResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName roomId
     * @var string|null
     */
    private $roomId = null;

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


}

