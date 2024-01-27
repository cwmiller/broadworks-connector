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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:834","type":"sequence"}]
 */
class SystemAccessDeviceCustomTagGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceCustomTagsTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:834
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

