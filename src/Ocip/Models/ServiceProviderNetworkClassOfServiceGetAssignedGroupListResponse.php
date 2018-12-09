<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderNetworkClassOfServiceGetAssignedGroupListResponse
 *
 * Response to ServiceProviderNetworkClassOfServiceGetAssignedGroupListRequest.
 *         Contains a table of groups that have the Network Class of Service 
 *         assigned. The column headings are: "Group Id" and "Group Name".
 *
 * @see ServiceProviderNetworkClassOfServiceGetAssignedGroupListRequest
 * @Groups [{"id":"8eb862aea0ee5d4211db0a0d3fe7c164:3995","type":"sequence"}]
 */
class ServiceProviderNetworkClassOfServiceGetAssignedGroupListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:3995
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

