<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupXsiPolicyProfileGetAssignedListResponse
 *
 * Response to GroupXsiPolicyProfileGetAssignedListRequest.
 *         Contains a table of all Xsi Policy Profile assigned to. 
 *         The column headings are: "Name", "Level", "Description" and "Default".
 *
 * @see GroupXsiPolicyProfileGetAssignedListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:8951","type":"sequence"}]
 */
class GroupXsiPolicyProfileGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName assignedTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:8951
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $assignedTable = null;

    /**
     * Getter for assignedTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAssignedTable()
    {
        return $this->assignedTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assignedTable;
    }

    /**
     * Setter for assignedTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $assignedTable
     * @return $this
     */
    public function setAssignedTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $assignedTable)
    {
        $this->assignedTable = $assignedTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssignedTable()
    {
        $this->assignedTable = null;
        return $this;
    }


}

