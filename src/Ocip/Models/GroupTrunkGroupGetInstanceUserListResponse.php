<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetInstanceUserListResponse
 *
 * Response to GroupTrunkGroupGetInstanceUserListRequest.
 *         The response contains a 7 column table with column headings "User Id",
 * "Last Name",
 *         "First Name", "Department", "Phone Number", "Hiragana Last Name",
 * "Hiragana First Name".
 */
class GroupTrunkGroupGetInstanceUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName trunkGroupUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $trunkGroupUserTable = null;

    /**
     * Getter for trunkGroupUserTable
     *
     * @ElementName trunkGroupUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getTrunkGroupUserTable()
    {
        return $this->trunkGroupUserTable;
    }

    /**
     * Setter for trunkGroupUserTable
     *
     * @ElementName trunkGroupUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $trunkGroupUserTable
     * @return $this
     */
    public function setTrunkGroupUserTable($trunkGroupUserTable)
    {
        $this->trunkGroupUserTable = $trunkGroupUserTable;
        return $this;
    }


}

