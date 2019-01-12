<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetInstanceUserListResponse
 *
 * Response to GroupTrunkGroupGetInstanceUserListRequest.
 *         The response contains a 7 column table with column headings "User Id", "Last Name",
 *         "First Name", "Department", "Phone Number", "Hiragana Last Name", "Hiragana First Name".
 *
 * @see GroupTrunkGroupGetInstanceUserListRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:2685","type":"sequence"}]
 */
class GroupTrunkGroupGetInstanceUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName trunkGroupUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2685
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $trunkGroupUserTable = null;

    /**
     * Getter for trunkGroupUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getTrunkGroupUserTable()
    {
        return $this->trunkGroupUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupUserTable;
    }

    /**
     * Setter for trunkGroupUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $trunkGroupUserTable
     * @return $this
     */
    public function setTrunkGroupUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $trunkGroupUserTable)
    {
        $this->trunkGroupUserTable = $trunkGroupUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupUserTable()
    {
        $this->trunkGroupUserTable = null;
        return $this;
    }


}

