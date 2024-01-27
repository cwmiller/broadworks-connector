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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:15897","type":"sequence"}]
 */
class GroupTrunkGroupGetInstanceUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName trunkGroupUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:15897
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

