<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceCustomTagGetListResponse
 *
 * Response to SystemAccessDeviceCustomTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device Management System on a per-device profile basis.
 *      
 *         In AS data mode, the column headings are: "Tag Name", "Tag Value", "Actual Tag Value".
 *         In XS data mode, the column headings are: "Tag Name", "Tag Value", "Is Encrypted", "Actual Tag Value".
 *
 * @see SystemAccessDeviceCustomTagGetListRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:721","type":"sequence"}]
 */
class SystemAccessDeviceCustomTagGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceCustomTagsTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 610f84d3e188f0477c3ae1a82ee036da:721
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $deviceCustomTagsTable = null;

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

