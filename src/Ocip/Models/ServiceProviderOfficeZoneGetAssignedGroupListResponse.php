<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderOfficeZoneGetAssignedGroupListResponse
 *
 * Response to ServiceProviderOfficeZoneGetAssignedGroupListRequest.  Contains a
 * table of groups that have the Office Zone assigned. The column headings are:
 * "Group Id" and "Group Name".
 */
class ServiceProviderOfficeZoneGetAssignedGroupListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

