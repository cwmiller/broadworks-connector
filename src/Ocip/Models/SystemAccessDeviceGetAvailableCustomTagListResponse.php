<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetAvailableCustomTagListResponse
 *
 * Response to SystemAccessDeviceGetAvailableCustomTagListRequest.
 *         Contains a table of all available custom tags managed by the Device Management System on a per-device profile basis.
 *      
 *         In AS data mode, the column headings are: "Tag Name", "Tag Value", "Tag Level", "Tag Set Name", "Region Name".
 *         
 *         In XS data mode, the column headings are: "Tag Name", "Tag Value", "Tag Level", "Tag Set Name", "Is Encrypted".
 *
 *         "Tag Level" can take the value: "System Default", "System", "Service Provider", "Group" or "Device Profile".
 *
 * @see SystemAccessDeviceGetAvailableCustomTagListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:1142","type":"sequence"}]
 */
class SystemAccessDeviceGetAvailableCustomTagListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceAvailableCustomTagsTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:1142
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $deviceAvailableCustomTagsTable = null;

    /**
     * Getter for deviceAvailableCustomTagsTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDeviceAvailableCustomTagsTable()
    {
        return $this->deviceAvailableCustomTagsTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceAvailableCustomTagsTable;
    }

    /**
     * Setter for deviceAvailableCustomTagsTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceAvailableCustomTagsTable
     * @return $this
     */
    public function setDeviceAvailableCustomTagsTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceAvailableCustomTagsTable)
    {
        $this->deviceAvailableCustomTagsTable = $deviceAvailableCustomTagsTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceAvailableCustomTagsTable()
    {
        $this->deviceAvailableCustomTagsTable = null;
        return $this;
    }
}

