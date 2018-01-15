<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceTypeFileGetListResponse21
 *
 * Response to GroupDeviceTypeFileGetListRequest21.
 *         Contains a table of device type files managed by the Device Management
 * System, on a per-group basis.
 *         The column headings are: "File Format", "Is Authenticated", "Access
 * URL", "Repository URL", "Template URL".
 */
class GroupDeviceTypeFileGetListResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupDeviceTypeFilesTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupDeviceTypeFilesTable = null;

    /**
     * @ElementName groupHasCustomizableDynamicFiles
     * @var bool|null
     */
    private $groupHasCustomizableDynamicFiles = null;

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

    /**
     * Getter for groupHasCustomizableDynamicFiles
     *
     * @ElementName groupHasCustomizableDynamicFiles
     * @return bool|null
     */
    public function getGroupHasCustomizableDynamicFiles()
    {
        return $this->groupHasCustomizableDynamicFiles;
    }

    /**
     * Setter for groupHasCustomizableDynamicFiles
     *
     * @ElementName groupHasCustomizableDynamicFiles
     * @param bool|null $groupHasCustomizableDynamicFiles
     * @return $this
     */
    public function setGroupHasCustomizableDynamicFiles($groupHasCustomizableDynamicFiles)
    {
        $this->groupHasCustomizableDynamicFiles = $groupHasCustomizableDynamicFiles;
        return $this;
    }


}

