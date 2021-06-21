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
 * @Groups [{"id":"939fd5846dfae8bdf58308d6cb9ebb12:1014","type":"sequence"}]
 */
class UserCollaborateRoomListGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName roomInstanceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:1014
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $roomInstanceTable = null;

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

