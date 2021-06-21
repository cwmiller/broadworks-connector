<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateProjectRoomAddResponse
 *
 * Response to UserCollaborateProjectRoomAddRequest.
 *
 * @see UserCollaborateProjectRoomAddRequest
 * @Groups [{"id":"939fd5846dfae8bdf58308d6cb9ebb12:832","type":"sequence"}]
 */
class UserCollaborateProjectRoomAddResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName roomId
     * @Type string
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:832
     * @MinLength 4
     * @MaxLength 15
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

