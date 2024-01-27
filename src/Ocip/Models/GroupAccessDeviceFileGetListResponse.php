<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceFileGetListResponse
 *
 * Response to GroupAccessDeviceFileGetListRequest.
 *           Contains a table of device files managed by the Device Management System on a per-device profile basis.
 *           The column headings are: "File Type", "File Format", "Is Authenticated".
 *           Replaced By: GroupAccessDeviceFileGetListResponse14sp8
 *
 * @see GroupAccessDeviceFileGetListRequest
 * @see GroupAccessDeviceFileGetListResponse14sp8
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:2929","type":"sequence"}]
 */
class GroupAccessDeviceFileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceFilesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:2929
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $deviceFilesTable = null;

    /**
     * Getter for deviceFilesTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDeviceFilesTable()
    {
        return $this->deviceFilesTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceFilesTable;
    }

    /**
     * Setter for deviceFilesTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceFilesTable
     * @return $this
     */
    public function setDeviceFilesTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceFilesTable)
    {
        $this->deviceFilesTable = $deviceFilesTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceFilesTable()
    {
        $this->deviceFilesTable = null;
        return $this;
    }
}

