<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCollaborateBridgeGetInstanceListResponse
 *
 * Response to the GroupCollaborateBridgeGetInstanceListRequest.
 *         Contains a table with column headings: "Service User Id", "Name", "Phone
 * Number", "Extension", "Department", "Participants", and "Is Default".
 *         The column values for "Is default" can either be true, or false.
 *
 * @see GroupCollaborateBridgeGetInstanceListRequest
 */
class GroupCollaborateBridgeGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName collaborateBridgeTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $collaborateBridgeTable = null;

    /**
     * Getter for collaborateBridgeTable
     *
     * @ElementName collaborateBridgeTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCollaborateBridgeTable()
    {
        return $this->collaborateBridgeTable;
    }

    /**
     * Setter for collaborateBridgeTable
     *
     * @ElementName collaborateBridgeTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $collaborateBridgeTable
     * @return $this
     */
    public function setCollaborateBridgeTable($collaborateBridgeTable)
    {
        $this->collaborateBridgeTable = $collaborateBridgeTable;
        return $this;
    }


}

