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
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:7122","type":"sequence"}]
 */
class ServiceProviderXsiPolicyProfileGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName assignedTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:7122
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

