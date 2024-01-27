<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileGetListResponse
 *
 * Response to SystemSIPDeviceTypeFileGetListRequest.
 *           Contains a table of device files managed by the Device Management System on a per-device type basis.
 *           The column headings are: "File Type", "File Format", "Is Authenticated".
 *           Replaced By: SystemSIPDeviceTypeFileGetListResponse14sp8
 *
 * @see SystemSIPDeviceTypeFileGetListRequest
 * @see SystemSIPDeviceTypeFileGetListResponse14sp8
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:32054","type":"sequence"}]
 */
class SystemSIPDeviceTypeFileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceTypeFilesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:32054
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $deviceTypeFilesTable = null;

    /**
     * Getter for deviceTypeFilesTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDeviceTypeFilesTable()
    {
        return $this->deviceTypeFilesTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceTypeFilesTable;
    }

    /**
     * Setter for deviceTypeFilesTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceTypeFilesTable
     * @return $this
     */
    public function setDeviceTypeFilesTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceTypeFilesTable)
    {
        $this->deviceTypeFilesTable = $deviceTypeFilesTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceTypeFilesTable()
    {
        $this->deviceTypeFilesTable = null;
        return $this;
    }
}

