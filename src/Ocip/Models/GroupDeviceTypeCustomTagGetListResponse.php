<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceTypeCustomTagGetListResponse
 *
 * Response to GroupDeviceTypeCustomTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device
 * Management System on a per-device type basis for a group.
 *         The column headings are: "Tag Name", "Tag Value"
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
    public function setGroupDeviceTypeCustomTagsTable($groupDeviceTypeCustomTagsTable)
    {
        $this->groupDeviceTypeCustomTagsTable = $groupDeviceTypeCustomTagsTable;
        return $this;
    }


}

