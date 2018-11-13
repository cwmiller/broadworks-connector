<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceTypeFileGetListResponse14sp8
 *
 * Response to GroupDeviceTypeFileGetListRequest14sp8.
 *         Contains a table of device type files managed by the Device Management
 * System, on a per-group basis.
 *         The column headings are: "File Format", "Is Authenticated", "Access
 * URL", "Repository URL", "Template URL".
 *         
 *         Replaced by: GroupDeviceTypeFileGetListResponse21
 *
 * @see GroupDeviceTypeFileGetListRequest14sp8
 * @see GroupDeviceTypeFileGetListResponse21
 */
class GroupDeviceTypeFileGetListResponse14sp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupDeviceTypeFilesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupDeviceTypeFilesTable = null;

    /**
     * Getter for groupDeviceTypeFilesTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getGroupDeviceTypeFilesTable()
    {
        return $this->groupDeviceTypeFilesTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupDeviceTypeFilesTable;
    }

    /**
     * Setter for groupDeviceTypeFilesTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupDeviceTypeFilesTable
     * @return $this
     */
    public function setGroupDeviceTypeFilesTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupDeviceTypeFilesTable)
    {
        $this->groupDeviceTypeFilesTable = $groupDeviceTypeFilesTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupDeviceTypeFilesTable()
    {
        $this->groupDeviceTypeFilesTable = null;
        return $this;
    }


}

