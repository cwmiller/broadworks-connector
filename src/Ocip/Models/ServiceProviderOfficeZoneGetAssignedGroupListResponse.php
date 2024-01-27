<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderOfficeZoneGetAssignedGroupListResponse
 *
 * Response to ServiceProviderOfficeZoneGetAssignedGroupListRequest.  Contains a table of groups that have the Office Zone assigned. The column headings are: "Group Id" and "Group Name".
 *
 * @see ServiceProviderOfficeZoneGetAssignedGroupListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:5280","type":"sequence"}]
 */
class ServiceProviderOfficeZoneGetAssignedGroupListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName groupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e19a9072c2dad499e9f28837da5768db:5280
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

