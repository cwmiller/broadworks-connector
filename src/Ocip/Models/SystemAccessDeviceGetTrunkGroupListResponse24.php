<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetTrunkGroupListResponse24
 *
 * Response to SystemAccessDeviceGetTrunkGroupListRequest24.
 *         Contains a table of trunk group names associated with the access device, the column headings are: 
 *         "Trunk Group Name", "Service Provider ID", "Group ID".
 *
 * @see SystemAccessDeviceGetTrunkGroupListRequest24
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:1484","type":"sequence"}]
 */
class SystemAccessDeviceGetTrunkGroupListResponse24 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceTrunkGroupsTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:1484
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $deviceTrunkGroupsTable = null;

    /**
     * Getter for deviceTrunkGroupsTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDeviceTrunkGroupsTable()
    {
        return $this->deviceTrunkGroupsTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceTrunkGroupsTable;
    }

    /**
     * Setter for deviceTrunkGroupsTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceTrunkGroupsTable
     * @return $this
     */
    public function setDeviceTrunkGroupsTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceTrunkGroupsTable)
    {
        $this->deviceTrunkGroupsTable = $deviceTrunkGroupsTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceTrunkGroupsTable()
    {
        $this->deviceTrunkGroupsTable = null;
        return $this;
    }
}

