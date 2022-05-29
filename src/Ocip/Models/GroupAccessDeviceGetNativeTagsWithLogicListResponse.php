<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetNativeTagsWithLogicListResponse
 *
 * Response to GroupAccessDeviceGetNativeTagsWithLogicListRequest.
 *         Contains a table of all native tags with logic managed by the Device Management System on a per-device profile basis.
 *
 *         The column headings are: "Tag Name", "Tag Value".
 *
 * @see GroupAccessDeviceGetNativeTagsWithLogicListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:1025","type":"sequence"}]
 */
class GroupAccessDeviceGetNativeTagsWithLogicListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceNativeTagsWithLogicTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1025
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

