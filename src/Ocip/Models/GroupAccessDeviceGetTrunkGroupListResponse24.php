<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetTrunkGroupListResponse24
 *
 * Response to GroupAccessDeviceGetTrunkGroupListRequest24.
 *         Contains a table of trunk group names associated with the access device, 
 *         the column headings are: "Trunk Group Name".
 *
 * @see GroupAccessDeviceGetTrunkGroupListRequest24
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:1194","type":"sequence"}]
 */
class GroupAccessDeviceGetTrunkGroupListResponse24 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName deviceTrunkGroupsTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:1194
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

