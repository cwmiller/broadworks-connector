<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetListInServiceProviderPagedSortedListResponse
 *
 * Response to GroupGetListInServiceProviderPagedSortedListRequest.
 *         Contains a table with column headings: "Group Id", "Group Name", "User Limit" and "Group External Id"
 *         and a row for each group.
 *         
 *         The following columns are only populated in AS data mode:
 *           "Group External Id".
 *
 * @see GroupGetListInServiceProviderPagedSortedListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:5850","type":"sequence"}]
 */
class GroupGetListInServiceProviderPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName groupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:5850
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

