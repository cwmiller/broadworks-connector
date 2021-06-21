<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceTypeFileGetListResponse
 *
 * Response to GroupDeviceTypeFileGetListRequest.
 *         Contains a table of device type files managed by the Device Management System, on a per-group basis.
 *         The column headings are: "File Type", "File Format", "Is Authenticated".
 *         Replaced By: GroupDeviceTypeFileGetListResponse14sp8
 *
 * @see GroupDeviceTypeFileGetListRequest
 * @see GroupDeviceTypeFileGetListResponse14sp8
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:9198","type":"sequence"}]
 */
class GroupDeviceTypeFileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupDeviceTypeFilesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9198
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

