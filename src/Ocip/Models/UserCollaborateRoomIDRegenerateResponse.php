<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateRoomIDRegenerateResponse
 *
 * Response to UserCollaborateRoomIDRegenerateRequest.
 *
 * @see UserCollaborateRoomIDRegenerateRequest
 * @Groups [{"id":"939fd5846dfae8bdf58308d6cb9ebb12:977","type":"sequence"}]
 */
class UserCollaborateRoomIDRegenerateResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName roomId
     * @Type string
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:977
     * @var string|null
     */
    private $roomId = null;

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

