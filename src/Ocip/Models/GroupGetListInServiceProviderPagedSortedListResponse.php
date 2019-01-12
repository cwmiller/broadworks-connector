<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetListInServiceProviderPagedSortedListResponse
 *
 * Response to GroupGetListInServiceProviderPagedSortedListRequest.
 *         Contains a 3 column table with column headings: "Group Id", "Group Name", "User Limit"
 *         and a row for each group.
 *
 * @see GroupGetListInServiceProviderPagedSortedListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:5125","type":"sequence"}]
 */
class GroupGetListInServiceProviderPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:5125
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupTable = null;

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

