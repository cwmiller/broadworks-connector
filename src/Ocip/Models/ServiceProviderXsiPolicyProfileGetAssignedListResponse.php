<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderXsiPolicyProfileGetAssignedListResponse
 *
 * Response to ServiceProviderXsiPolicyProfileGetAssignedListRequest.
 *         Contains a table of all Xsi Policy Profile assigned to.
 *         The column headings are: "Name", "Level", "Description" and "Default".
 *
 * @see ServiceProviderXsiPolicyProfileGetAssignedListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:7200","type":"sequence"}]
 */
class ServiceProviderXsiPolicyProfileGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName assignedTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e19a9072c2dad499e9f28837da5768db:7200
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

