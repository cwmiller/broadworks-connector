<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetInstanceListResponse14
 *
 * Response to GroupTrunkGroupGetInstanceListRequest14.
 *         Contains a table with column headings "Service User Id", "Name",
 * "Department", "Device Name", "Device Level",
 *         "Group Id".
 *         The "Device Level" column contains one of the AccessDeviceLevel
 * enumerated constants.
 */
class GroupTrunkGroupGetInstanceListResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

