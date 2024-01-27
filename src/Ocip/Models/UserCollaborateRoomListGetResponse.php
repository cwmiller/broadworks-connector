<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateRoomListGetResponse
 *
 * Response to UserCollaborateRoomListGetRequest.
 *         Contains a table with column headings :  "Room Type", "Name", "Room Id",
 *         in a row for each collaborate room instance.  
 *         Possible values for Room Type column are MyRoom, Project Room and
 *         Instant Room.
 *
 * @see UserCollaborateRoomListGetRequest
 * @Groups [{"id":"bc805893b9cc7e3e01eec64e9ad62768:1013","type":"sequence"}]
 */
class UserCollaborateRoomListGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName roomInstanceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group bc805893b9cc7e3e01eec64e9ad62768:1013
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $roomInstanceTable = null;

    /**
     * Getter for roomInstanceTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getRoomInstanceTable()
    {
        return $this->roomInstanceTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->roomInstanceTable;
    }

    /**
     * Setter for roomInstanceTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $roomInstanceTable
     * @return $this
     */
    public function setRoomInstanceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $roomInstanceTable)
    {
        $this->roomInstanceTable = $roomInstanceTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoomInstanceTable()
    {
        $this->roomInstanceTable = null;
        return $this;
    }
}

