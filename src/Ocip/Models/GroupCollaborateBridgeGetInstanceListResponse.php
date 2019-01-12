<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCollaborateBridgeGetInstanceListResponse
 *
 * Response to the GroupCollaborateBridgeGetInstanceListRequest.
 *         Contains a table with column headings: "Service User Id", "Name", "Phone Number", "Extension", "Department", "Participants", and "Is Default".
 *         The column values for "Is default" can either be true, or false.
 *
 * @see GroupCollaborateBridgeGetInstanceListRequest
 * @Groups [{"id":"939fd5846dfae8bdf58308d6cb9ebb12:321","type":"sequence"}]
 */
class GroupCollaborateBridgeGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName collaborateBridgeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 939fd5846dfae8bdf58308d6cb9ebb12:321
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $collaborateBridgeTable = null;

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

