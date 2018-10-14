<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceCustomTagGetListResponse
 *
 * Response to SystemAccessDeviceCustomTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device
 * Management System on a per-device profile basis.
 *      
 *         In AS data mode, the column headings are: "Tag Name", "Tag Value",
 * "Actual Tag Value".
 *         In XS data mode, the column headings are: "Tag Name", "Tag Value", "Is
 * Encrypted", "Actual Tag Value".
 *
 * @see SystemAccessDeviceCustomTagGetListRequest
 */
class SystemAccessDeviceCustomTagGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setDeviceCustomTagsTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceCustomTagsTable)
    {
        $this->deviceCustomTagsTable = $deviceCustomTagsTable;
        return $this;
    }


}

