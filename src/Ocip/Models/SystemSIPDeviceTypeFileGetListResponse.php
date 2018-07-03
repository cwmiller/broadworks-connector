<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileGetListResponse
 *
 * Response to SystemSIPDeviceTypeFileGetListRequest.
 *           Contains a table of device files managed by the Device Management
 * System on a per-device type basis.
 *           The column headings are: "File Type", "File Format", "Is
 * Authenticated".
 *           Replaced By: SystemSIPDeviceTypeFileGetListResponse14sp8
 *
 * @see SystemSIPDeviceTypeFileGetListRequest
 * @see SystemSIPDeviceTypeFileGetListResponse14sp8
 */
class SystemSIPDeviceTypeFileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceTypeFilesTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $deviceTypeFilesTable = null;

    /**
     * Getter for deviceTypeFilesTable
     *
     * @ElementName deviceTypeFilesTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDeviceTypeFilesTable()
    {
        return $this->deviceTypeFilesTable;
    }

    /**
     * Setter for deviceTypeFilesTable
     *
     * @ElementName deviceTypeFilesTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $deviceTypeFilesTable
     * @return $this
     */
    public function setDeviceTypeFilesTable($deviceTypeFilesTable)
    {
        $this->deviceTypeFilesTable = $deviceTypeFilesTable;
        return $this;
    }


}

