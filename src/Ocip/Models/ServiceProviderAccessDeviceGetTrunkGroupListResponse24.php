<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceGetTrunkGroupListResponse24
 *
 * Response to ServiceProviderAccessDeviceGetTrunkGroupListRequest24.
 *         Contains a table of trunk group names associated with the access device, the column headings are: 
 *         "Trunk Group Name", "Group ID".
 *
 * @see ServiceProviderAccessDeviceGetTrunkGroupListRequest24
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:1065","type":"sequence"}]
 */
class ServiceProviderAccessDeviceGetTrunkGroupListResponse24 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceTrunkGroupsTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e19a9072c2dad499e9f28837da5768db:1065
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

