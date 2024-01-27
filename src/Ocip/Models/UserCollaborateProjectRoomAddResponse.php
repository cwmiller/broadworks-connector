<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateProjectRoomAddResponse
 *
 * Response to UserCollaborateProjectRoomAddRequest.
 *
 * @see UserCollaborateProjectRoomAddRequest
 * @Groups [{"id":"bc805893b9cc7e3e01eec64e9ad62768:831","type":"sequence"}]
 */
class UserCollaborateProjectRoomAddResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName roomId
     * @Type string
     * @Group bc805893b9cc7e3e01eec64e9ad62768:831
     * @MinLength 4
     * @MaxLength 15
     * @var string|null
     */
    protected $roomId = null;

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

