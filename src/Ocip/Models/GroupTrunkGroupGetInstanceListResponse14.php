<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetInstanceListResponse14
 *
 * Response to GroupTrunkGroupGetInstanceListRequest14.
 *                 Contains a table with column headings "Service User Id", "Name", "Department", "Device Name", "Device
 *                 Level",
 *                 "Group Id".
 *                 The "Device Level" column contains one of the AccessDeviceLevel enumerated constants.
 *
 * @see GroupTrunkGroupGetInstanceListRequest14
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:2360","type":"sequence"}]
 */
class GroupTrunkGroupGetInstanceListResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName trunkGroupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2360
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $trunkGroupTable = null;

    /**
     * Getter for trunkGroupTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getTrunkGroupTable()
    {
        return $this->trunkGroupTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupTable;
    }

    /**
     * Setter for trunkGroupTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $trunkGroupTable
     * @return $this
     */
    public function setTrunkGroupTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $trunkGroupTable)
    {
        $this->trunkGroupTable = $trunkGroupTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupTable()
    {
        $this->trunkGroupTable = null;
        return $this;
    }


}

