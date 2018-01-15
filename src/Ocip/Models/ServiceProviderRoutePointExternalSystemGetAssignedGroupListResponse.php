<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRoutePointExternalSystemGetAssignedGroupListResponse
 *
 * Response to ServiceProviderRoutePointExternalSystemGetAssignedGroupListRequest.
 *         Contains a table with column headings: "Group Id", "Group Name"
 *         and a row for each group.
 */
class ServiceProviderRoutePointExternalSystemGetAssignedGroupListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupTable = null;

    /**
     * Getter for groupTable
     *
     * @ElementName groupTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getGroupTable()
    {
        return $this->groupTable;
    }

    /**
     * Setter for groupTable
     *
     * @ElementName groupTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $groupTable
     * @return $this
     */
    public function setGroupTable($groupTable)
    {
        $this->groupTable = $groupTable;
        return $this;
    }


}

