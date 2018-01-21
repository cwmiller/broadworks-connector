<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceCustomTagGetListResponse
 *
 * Response to GroupAccessDeviceCustomTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device
 * Management System on a per-device profile basis.
 *         In AS data mode, the column headings are: 
 *           "Tag Name", "Tag Value", "Actual Tag Value".
 *         In XS data mode, the column headings are: 
 *           "Tag Name", "Tag Value", "Actual Tag Value" if request is invoked by
 * an admin without system privileges.
 *           "Tag Name", "Tag Value", "Is Encrypted", "Actual Tag Value" if request
 * is invoked by an admin with system privileges.
 */
class GroupAccessDeviceCustomTagGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceCustomTagsTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $deviceCustomTagsTable = null;

    /**
     * Getter for deviceCustomTagsTable
     *
     * @ElementName deviceCustomTagsTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDeviceCustomTagsTable()
    {
        return $this->deviceCustomTagsTable;
    }

    /**
     * Setter for deviceCustomTagsTable
     *
     * @ElementName deviceCustomTagsTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $deviceCustomTagsTable
     * @return $this
     */
    public function setDeviceCustomTagsTable($deviceCustomTagsTable)
    {
        $this->deviceCustomTagsTable = $deviceCustomTagsTable;
        return $this;
    }


}

