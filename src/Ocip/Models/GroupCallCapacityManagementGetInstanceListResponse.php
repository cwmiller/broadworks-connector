<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCapacityManagementGetInstanceListResponse
 *
 * Response to the GroupCallCapacityManagementGetInstanceListRequest.
 *         Contains a table with column headings: "Name", "Is Default", "Maximum
 * Calls", "Maximum Incoming Calls", "Maximum Outgoing Calls".
 *
 * @see GroupCallCapacityManagementGetInstanceListRequest
 */
class GroupCallCapacityManagementGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callCapacityGroupTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $callCapacityGroupTable = null;

    /**
     * Getter for callCapacityGroupTable
     *
     * @ElementName callCapacityGroupTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCallCapacityGroupTable()
    {
        return $this->callCapacityGroupTable;
    }

    /**
     * Setter for callCapacityGroupTable
     *
     * @ElementName callCapacityGroupTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $callCapacityGroupTable
     * @return $this
     */
    public function setCallCapacityGroupTable($callCapacityGroupTable)
    {
        $this->callCapacityGroupTable = $callCapacityGroupTable;
        return $this;
    }


}

