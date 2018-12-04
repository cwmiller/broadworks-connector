<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMeetMeConferencingGetInstanceListResponse
 *
 * Response to the GroupMeetMeConferencingGetInstanceListRequest.
 *         Contains a table with column headings: "Service User Id", "Name", "Phone Number", "Extension", "Department", "Ports", and "Is Active".
 *         The column values for "Is Active" can either be true, or false.
 *
 * @see GroupMeetMeConferencingGetInstanceListRequest
 * @Groups [{"id":"e51a0a16349851c3fad768a24a35838d:176","type":"sequence"}]
 */
class GroupMeetMeConferencingGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceBridgeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e51a0a16349851c3fad768a24a35838d:176
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $conferenceBridgeTable = null;

    /**
     * Getter for conferenceBridgeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getConferenceBridgeTable()
    {
        return $this->conferenceBridgeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceBridgeTable;
    }

    /**
     * Setter for conferenceBridgeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $conferenceBridgeTable
     * @return $this
     */
    public function setConferenceBridgeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $conferenceBridgeTable)
    {
        $this->conferenceBridgeTable = $conferenceBridgeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceBridgeTable()
    {
        $this->conferenceBridgeTable = null;
        return $this;
    }


}

