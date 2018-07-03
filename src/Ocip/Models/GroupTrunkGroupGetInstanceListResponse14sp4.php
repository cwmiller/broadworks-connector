<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetInstanceListResponse14sp4
 *
 * Response to GroupTrunkGroupGetInstanceListRequest14sp4.
 *         Contains a table with column headings "Name", "Department", "Device
 * Name", "Device Level",
 *         "Group Id".
 *         The "Device Level" column contains one of the AccessDeviceLevel
 * enumerated constants.
 *
 * @see GroupTrunkGroupGetInstanceListRequest14sp4
 */
class GroupTrunkGroupGetInstanceListResponse14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName trunkGroupTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $trunkGroupTable = null;

    /**
     * Getter for trunkGroupTable
     *
     * @ElementName trunkGroupTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getTrunkGroupTable()
    {
        return $this->trunkGroupTable;
    }

    /**
     * Setter for trunkGroupTable
     *
     * @ElementName trunkGroupTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $trunkGroupTable
     * @return $this
     */
    public function setTrunkGroupTable($trunkGroupTable)
    {
        $this->trunkGroupTable = $trunkGroupTable;
        return $this;
    }


}

