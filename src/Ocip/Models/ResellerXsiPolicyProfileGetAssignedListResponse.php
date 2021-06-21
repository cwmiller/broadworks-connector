<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerXsiPolicyProfileGetAssignedListResponse
 *
 * Response to ResellerXsiPolicyProfileGetAssignedListRequest.
 *         Contains a table of all Xsi Policy Profile assigned to.
 *         The column headings are: "Name", "Level", "Description" and "Default".
 *
 * @see ResellerXsiPolicyProfileGetAssignedListRequest
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:986","type":"sequence"}]
 */
class ResellerXsiPolicyProfileGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName assignedTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b009175f2a2a9d38115e319a6ad64d7f:986
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $assignedTable = null;

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

