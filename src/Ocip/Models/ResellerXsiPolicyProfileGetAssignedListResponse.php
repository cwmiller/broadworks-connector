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
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:1000","type":"sequence"}]
 */
class ResellerXsiPolicyProfileGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName assignedTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d45e381d6dbac771631649063122a42e:1000
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

