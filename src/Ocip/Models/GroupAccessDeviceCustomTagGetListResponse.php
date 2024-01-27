<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceCustomTagGetListResponse
 *
 * Response to GroupAccessDeviceCustomTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device Management System on a per-device profile basis.
 *         In AS data mode, the column headings are: 
 *           "Tag Name", "Tag Value", "Actual Tag Value".
 *         In XS data mode, the column headings are: 
 *           "Tag Name", "Tag Value", "Actual Tag Value" if request is invoked by an admin without system privileges.
 *           "Tag Name", "Tag Value", "Is Encrypted", "Actual Tag Value" if request is invoked by an admin with system privileges.
 *
 * @see GroupAccessDeviceCustomTagGetListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:449","type":"sequence"}]
 */
class GroupAccessDeviceCustomTagGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceCustomTagsTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:449
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $deviceCustomTagsTable = null;

    /**
     * Getter for deviceCustomTagsTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDeviceCustomTagsTable()
    {
        return $this->deviceCustomTagsTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceCustomTagsTable;
    }

    /**
     * Setter for deviceCustomTagsTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceCustomTagsTable
     * @return $this
     */
    public function setDeviceCustomTagsTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceCustomTagsTable)
    {
        $this->deviceCustomTagsTable = $deviceCustomTagsTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceCustomTagsTable()
    {
        $this->deviceCustomTagsTable = null;
        return $this;
    }
}

