<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetInstanceUserListResponse14sp4
 *
 * Response to GroupTrunkGroupGetInstanceUserListRequest14sp4.
 *         The response contains a 9 column table with column headings "User Id", "Last Name",
 *         "First Name", "Department", "Phone Number", "Hiragana Last Name", "Hiragana First Name",
 *         "Extension", "Email Address".
 *
 * @see GroupTrunkGroupGetInstanceUserListRequest14sp4
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:1286","type":"sequence"}]
 */
class GroupTrunkGroupGetInstanceUserListResponse14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName trunkGroupUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1286
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $trunkGroupUserTable = null;

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

