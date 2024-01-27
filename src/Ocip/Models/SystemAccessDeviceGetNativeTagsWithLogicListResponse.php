<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetNativeTagsWithLogicListResponse
 *
 * Response to SystemAccessDeviceGetNativeTagsWithLogicListRequest.
 *         Contains a table of all native tags with logic managed by the Device Management System on a per-device profile basis.
 *      
 *         The column headings are: "Tag Name", "Tag Value".
 *
 * @see SystemAccessDeviceGetNativeTagsWithLogicListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:1302","type":"sequence"}]
 */
class SystemAccessDeviceGetNativeTagsWithLogicListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceNativeTagsWithLogicTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:1302
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $deviceNativeTagsWithLogicTable = null;

    /**
     * Getter for deviceNativeTagsWithLogicTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDeviceNativeTagsWithLogicTable()
    {
        return $this->deviceNativeTagsWithLogicTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceNativeTagsWithLogicTable;
    }

    /**
     * Setter for deviceNativeTagsWithLogicTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceNativeTagsWithLogicTable
     * @return $this
     */
    public function setDeviceNativeTagsWithLogicTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceNativeTagsWithLogicTable)
    {
        $this->deviceNativeTagsWithLogicTable = $deviceNativeTagsWithLogicTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceNativeTagsWithLogicTable()
    {
        $this->deviceNativeTagsWithLogicTable = null;
        return $this;
    }
}

