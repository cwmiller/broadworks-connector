<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceGetNativeTagsWithLogicListResponse
 *
 * Response to ServiceProviderAccessDeviceGetNativeTagsWithLogicListRequest.
 *         Contains a table of all native tags with logic managed by the Device Management System on a per-device profile basis.
 *
 *         The column headings are: "Tag Name", "Tag Value".
 *
 * @see ServiceProviderAccessDeviceGetNativeTagsWithLogicListRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:881","type":"sequence"}]
 */
class ServiceProviderAccessDeviceGetNativeTagsWithLogicListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceNativeTagsWithLogicTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:881
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $deviceNativeTagsWithLogicTable = null;

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

