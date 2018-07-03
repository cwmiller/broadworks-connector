<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceFileGetListResponse14sp8
 *
 * Response to SystemAccessDeviceFileGetListRequest14sp8.
 *         Contains a table of device files managed by the Device Management System
 * on a per-device profile basis.
 *         The column headings are: "File Format", "Is Authenticated", "Access
 * URL", "Repository URL", "Template URL", "Extended Capture".
 *
 * @see SystemAccessDeviceFileGetListRequest14sp8
 */
class SystemAccessDeviceFileGetListResponse14sp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceFilesTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $deviceFilesTable = null;

    /**
     * Getter for deviceFilesTable
     *
     * @ElementName deviceFilesTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDeviceFilesTable()
    {
        return $this->deviceFilesTable;
    }

    /**
     * Setter for deviceFilesTable
     *
     * @ElementName deviceFilesTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $deviceFilesTable
     * @return $this
     */
    public function setDeviceFilesTable($deviceFilesTable)
    {
        $this->deviceFilesTable = $deviceFilesTable;
        return $this;
    }


}

