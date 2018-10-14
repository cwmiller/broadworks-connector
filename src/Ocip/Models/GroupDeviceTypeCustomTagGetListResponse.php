<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceTypeCustomTagGetListResponse
 *
 * Response to GroupDeviceTypeCustomTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device
 * Management System on a per-device type basis for a group.
 *         In As data mode, the column headings are:
 *           "Tag Name", "Tag Value", "Actual Tag Value".
 *         In XS data mode, the column headings are:
 *           "Tag Name", "Tag Value", "Actual Tag Value" if request is invoked by
 * an admin without system privileges.
 *           "Tag Name", "Tag Value", "Is Encrypted", "Actual Tag Value" if request
 * is invoked by an admin with system privileges.
 *
 * @see GroupDeviceTypeCustomTagGetListRequest
 */
class GroupDeviceTypeCustomTagGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupDeviceTypeCustomTagsTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupDeviceTypeCustomTagsTable = null;

    /**
     * Getter for groupDeviceTypeCustomTagsTable
     *
     * @ElementName groupDeviceTypeCustomTagsTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getGroupDeviceTypeCustomTagsTable()
    {
        return $this->groupDeviceTypeCustomTagsTable;
    }

    /**
     * Setter for groupDeviceTypeCustomTagsTable
     *
     * @ElementName groupDeviceTypeCustomTagsTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $groupDeviceTypeCustomTagsTable
     * @return $this
     */
    public function setGroupDeviceTypeCustomTagsTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupDeviceTypeCustomTagsTable)
    {
        $this->groupDeviceTypeCustomTagsTable = $groupDeviceTypeCustomTagsTable;
        return $this;
    }


}

