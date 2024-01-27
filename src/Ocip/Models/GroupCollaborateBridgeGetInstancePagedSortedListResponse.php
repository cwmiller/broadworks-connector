<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCollaborateBridgeGetInstancePagedSortedListResponse
 *
 * Response to the GroupCollaborateBridgeGetInstancePagedSortedListRequest.
 *         Contains a table with column headings: "Service User Id", "Name", "Phone Number", "Is Phone Number Activated", 
 *         "Country Code","National Prefix", "Extension", "Department", "Department Type", 
 *         "Parent Department", "Parent Department Type", "Participants", "Is Default", "Max Room Participants", 
 *         "Is Support Outdial".
 *         The column values for "Is default", "Is Support Outdial" can either be true, or false.
 *
 * @see GroupCollaborateBridgeGetInstancePagedSortedListRequest
 * @Groups [{"id":"bc805893b9cc7e3e01eec64e9ad62768:377","type":"sequence"}]
 */
class GroupCollaborateBridgeGetInstancePagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName collaborateBridgeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group bc805893b9cc7e3e01eec64e9ad62768:377
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $collaborateBridgeTable = null;

    /**
     * Getter for collaborateBridgeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCollaborateBridgeTable()
    {
        return $this->collaborateBridgeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->collaborateBridgeTable;
    }

    /**
     * Setter for collaborateBridgeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $collaborateBridgeTable
     * @return $this
     */
    public function setCollaborateBridgeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $collaborateBridgeTable)
    {
        $this->collaborateBridgeTable = $collaborateBridgeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCollaborateBridgeTable()
    {
        $this->collaborateBridgeTable = null;
        return $this;
    }
}

