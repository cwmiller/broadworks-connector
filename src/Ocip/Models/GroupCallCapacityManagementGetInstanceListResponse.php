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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $callCapacityGroupTable = null;

    /**
     * Getter for callCapacityGroupTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCallCapacityGroupTable()
    {
        return $this->callCapacityGroupTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callCapacityGroupTable;
    }

    /**
     * Setter for callCapacityGroupTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callCapacityGroupTable
     * @return $this
     */
    public function setCallCapacityGroupTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callCapacityGroupTable)
    {
        $this->callCapacityGroupTable = $callCapacityGroupTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallCapacityGroupTable()
    {
        $this->callCapacityGroupTable = null;
        return $this;
    }


}

