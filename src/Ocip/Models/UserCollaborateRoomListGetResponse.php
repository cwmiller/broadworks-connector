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
 */
class UserCollaborateRoomListGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName roomInstanceTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $roomInstanceTable = null;

    /**
     * Getter for roomInstanceTable
     *
     * @ElementName roomInstanceTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getRoomInstanceTable()
    {
        return $this->roomInstanceTable;
    }

    /**
     * Setter for roomInstanceTable
     *
     * @ElementName roomInstanceTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $roomInstanceTable
     * @return $this
     */
    public function setRoomInstanceTable($roomInstanceTable)
    {
        $this->roomInstanceTable = $roomInstanceTable;
        return $this;
    }


}

