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
 *         Replaced by: GroupDeviceTypeFileGetListResponset21.
 */
class GroupDeviceTypeFileGetListResponse14sp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupDeviceTypeFilesTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupDeviceTypeFilesTable = null;

    /**
     * @ElementName groupHasFilesWithCustomizableTags
     * @var bool|null
     */
    private $groupHasFilesWithCustomizableTags = null;

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
     * Getter for groupHasFilesWithCustomizableTags
     *
     * @ElementName groupHasFilesWithCustomizableTags
     * @return bool|null
     */
    public function getGroupHasFilesWithCustomizableTags()
    {
        return $this->groupHasFilesWithCustomizableTags;
    }

    /**
     * Setter for groupHasFilesWithCustomizableTags
     *
     * @ElementName groupHasFilesWithCustomizableTags
     * @param bool|null $groupHasFilesWithCustomizableTags
     * @return $this
     */
    public function setGroupHasFilesWithCustomizableTags($groupHasFilesWithCustomizableTags)
    {
        $this->groupHasFilesWithCustomizableTags = $groupHasFilesWithCustomizableTags;
        return $this;
    }


}

