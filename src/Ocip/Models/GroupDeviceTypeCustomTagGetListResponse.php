<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceTypeCustomTagGetListResponse
 *
 * Response to GroupDeviceTypeCustomTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device Management System on a per-device type basis for a group.
 *         In As data mode, the column headings are:
 *           "Tag Name", "Tag Value", "Actual Tag Value".
 *         In XS data mode, the column headings are:
 *           "Tag Name", "Tag Value", "Actual Tag Value" if request is invoked by an admin without system privileges.
 *           "Tag Name", "Tag Value", "Is Encrypted", "Actual Tag Value" if request is invoked by an admin with system privileges.
 *
 * @see GroupDeviceTypeCustomTagGetListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:4039","type":"sequence"}]
 */
class GroupDeviceTypeCustomTagGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName groupDeviceTypeCustomTagsTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:4039
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $groupDeviceTypeCustomTagsTable = null;

    /**
     * Getter for groupDeviceTypeCustomTagsTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getGroupDeviceTypeCustomTagsTable()
    {
        return $this->groupDeviceTypeCustomTagsTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupDeviceTypeCustomTagsTable;
    }

    /**
     * Setter for groupDeviceTypeCustomTagsTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupDeviceTypeCustomTagsTable
     * @return $this
     */
    public function setGroupDeviceTypeCustomTagsTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupDeviceTypeCustomTagsTable)
    {
        $this->groupDeviceTypeCustomTagsTable = $groupDeviceTypeCustomTagsTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupDeviceTypeCustomTagsTable()
    {
        $this->groupDeviceTypeCustomTagsTable = null;
        return $this;
    }
}

