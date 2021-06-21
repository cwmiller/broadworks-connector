<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetInstanceListResponse14sp4
 *
 * Response to GroupTrunkGroupGetInstanceListRequest14sp4.
 *         Contains a table with column headings "Name", "Department", "Device Name", "Device Level",
 *         "Group Id".
 *         The "Device Level" column contains one of the AccessDeviceLevel enumerated constants.
 *
 * @see GroupTrunkGroupGetInstanceListRequest14sp4
 * @Groups [{"id":"b9c14e2d80e4e7749688ca13ba233b44:1134","type":"sequence"}]
 */
class GroupTrunkGroupGetInstanceListResponse14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName trunkGroupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1134
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

