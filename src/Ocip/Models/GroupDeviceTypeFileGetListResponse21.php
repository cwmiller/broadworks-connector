<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceTypeFileGetListResponse21
 *
 * Response to GroupDeviceTypeFileGetListRequest21.
 *         Contains a table of device type files managed by the Device Management System, on a per-group basis.
 *         The column headings are: "File Format", "Is Authenticated", "Access URL", "Repository URL", "Template URL".
 *
 * @see GroupDeviceTypeFileGetListRequest21
 * @Groups [{"id":"15129cd25fa2d5581f4edfd652c24f93:3411","type":"sequence"}]
 */
class GroupDeviceTypeFileGetListResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupDeviceTypeFilesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 15129cd25fa2d5581f4edfd652c24f93:3411
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupDeviceTypeFilesTable = null;

    /**
     * @ElementName groupHasCustomizableDynamicFiles
     * @Type bool
     * @Group 15129cd25fa2d5581f4edfd652c24f93:3411
     * @var bool|null
     */
    private $groupHasCustomizableDynamicFiles = null;

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

    /**
     * Getter for groupHasCustomizableDynamicFiles
     *
     * @return bool
     */
    public function getGroupHasCustomizableDynamicFiles()
    {
        return $this->groupHasCustomizableDynamicFiles instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupHasCustomizableDynamicFiles;
    }

    /**
     * Setter for groupHasCustomizableDynamicFiles
     *
     * @param bool $groupHasCustomizableDynamicFiles
     * @return $this
     */
    public function setGroupHasCustomizableDynamicFiles($groupHasCustomizableDynamicFiles)
    {
        $this->groupHasCustomizableDynamicFiles = $groupHasCustomizableDynamicFiles;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupHasCustomizableDynamicFiles()
    {
        $this->groupHasCustomizableDynamicFiles = null;
        return $this;
    }


}

