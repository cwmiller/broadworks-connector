<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceFileGetListResponse14sp8
 *
 * Response to SystemAccessDeviceFileGetListRequest14sp8.
 *         Contains a table of device files managed by the Device Management System on a per-device profile basis.
 *         The column headings are: "File Format", "Is Authenticated", "Access URL", "Repository URL", "Template URL", "Extended Capture URL", "Is File Linked".
 *         
 *         The following column is only populated in AS data mode for leaf devices.
 *           "Is File Linked"
 *
 * @see SystemAccessDeviceFileGetListRequest14sp8
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:973","type":"sequence"}]
 */
class SystemAccessDeviceFileGetListResponse14sp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceFilesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:973
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

