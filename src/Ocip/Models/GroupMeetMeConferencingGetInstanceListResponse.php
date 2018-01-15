<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMeetMeConferencingGetInstanceListResponse
 *
 * Response to the GroupMeetMeConferencingGetInstanceListRequest.
 *         Contains a table with column headings: "Service User Id", "Name", "Phone
 * Number", "Extension", "Department", "Ports", and "Is Active".
 *         The column values for "Is Active" can either be true, or false.
 */
class GroupMeetMeConferencingGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceBridgeTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $conferenceBridgeTable = null;

    /**
     * Getter for conferenceBridgeTable
     *
     * @ElementName conferenceBridgeTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getConferenceBridgeTable()
    {
        return $this->conferenceBridgeTable;
    }

    /**
     * Setter for conferenceBridgeTable
     *
     * @ElementName conferenceBridgeTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $conferenceBridgeTable
     * @return $this
     */
    public function setConferenceBridgeTable($conferenceBridgeTable)
    {
        $this->conferenceBridgeTable = $conferenceBridgeTable;
        return $this;
    }


}

