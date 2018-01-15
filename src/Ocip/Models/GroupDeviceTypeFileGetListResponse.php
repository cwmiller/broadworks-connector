<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceTypeFileGetListResponse
 *
 * Response to GroupDeviceTypeFileGetListRequest.
 *         Contains a table of device type files managed by the Device Management
 * System, on a per-group basis.
 *         The column headings are: "File Type", "File Format", "Is Authenticated".
 *         Replaced By: GroupDeviceTypeFileGetListResponse14sp8
 */
class GroupDeviceTypeFileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupDeviceTypeFilesTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupDeviceTypeFilesTable = null;

    /**
     * Getter for groupDeviceTypeFilesTable
     *
     * @ElementName groupDeviceTypeFilesTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getGroupDeviceTypeFilesTable()
    {
        return $this->groupDeviceTypeFilesTable;
    }

    /**
     * Setter for groupDeviceTypeFilesTable
     *
     * @ElementName groupDeviceTypeFilesTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $groupDeviceTypeFilesTable
     * @return $this
     */
    public function setGroupDeviceTypeFilesTable($groupDeviceTypeFilesTable)
    {
        $this->groupDeviceTypeFilesTable = $groupDeviceTypeFilesTable;
        return $this;
    }


}

