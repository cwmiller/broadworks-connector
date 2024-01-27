<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetAvailableCustomTagListResponse
 *
 * Response to GroupAccessDeviceGetAvailableCustomTagListRequest.
 *         Contains a table of all available custom tags managed by the Device Management System on a per-device profile basis.
 *
 *         In AS data mode, the column headings are: "Tag Name", "Tag Value", "Tag Level", "Tag Set Name", "Region Name".
 *         
 *         In XS data mode:
 *           the column headings are: "Tag Name", "Tag Value", "Tag Level", "Tag Set Name", "Is Encrypted" if request is invoked by a System administrator or by an administrator with higher priviledges, otherwise the column headings are: "Tag Name", "Tag Value", "Tag Level", "Tag Source", "Tag Set Name".
 *
 *         "Tag Level" can take the value: "System Default", "System", "Service Provider", "Group" or "Device Profile".
 *
 * @see GroupAccessDeviceGetAvailableCustomTagListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:727","type":"sequence"}]
 */
class GroupAccessDeviceGetAvailableCustomTagListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceAvailableCustomTagsTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:727
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $deviceAvailableCustomTagsTable = null;

    /**
     * Getter for deviceAvailableCustomTagsTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDeviceAvailableCustomTagsTable()
    {
        return $this->deviceAvailableCustomTagsTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceAvailableCustomTagsTable;
    }

    /**
     * Setter for deviceAvailableCustomTagsTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceAvailableCustomTagsTable
     * @return $this
     */
    public function setDeviceAvailableCustomTagsTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceAvailableCustomTagsTable)
    {
        $this->deviceAvailableCustomTagsTable = $deviceAvailableCustomTagsTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceAvailableCustomTagsTable()
    {
        $this->deviceAvailableCustomTagsTable = null;
        return $this;
    }
}

