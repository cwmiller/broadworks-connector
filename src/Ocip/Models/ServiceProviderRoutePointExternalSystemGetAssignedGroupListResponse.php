<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRoutePointExternalSystemGetAssignedGroupListResponse
 *
 * Response to ServiceProviderRoutePointExternalSystemGetAssignedGroupListRequest.
 *         Contains a table with column headings: "Group Id", "Group Name"
 *         and a row for each group.
 *
 * @see ServiceProviderRoutePointExternalSystemGetAssignedGroupListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:5597","type":"sequence"}]
 */
class ServiceProviderRoutePointExternalSystemGetAssignedGroupListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName groupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e19a9072c2dad499e9f28837da5768db:5597
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $groupTable = null;

    /**
     * Getter for groupTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getGroupTable()
    {
        return $this->groupTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupTable;
    }

    /**
     * Setter for groupTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupTable
     * @return $this
     */
    public function setGroupTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupTable)
    {
        $this->groupTable = $groupTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupTable()
    {
        $this->groupTable = null;
        return $this;
    }
}

