<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallParkGetAvailableAlternateRecallUserListResponse
 *
 * Response to the GroupCallParkGetAvailableAlternateRecallUserListResponse.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 *
 * @see GroupCallParkGetAvailableAlternateRecallUserListResponse
 * @Groups [{"id":"b6fd73d148b9b309dce1d2f04516ddfa:115","type":"sequence"}]
 */
class GroupCallParkGetAvailableAlternateRecallUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName availableHuntGroupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b6fd73d148b9b309dce1d2f04516ddfa:115
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $availableHuntGroupTable = null;

    /**
     * Getter for availableHuntGroupTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAvailableHuntGroupTable()
    {
        return $this->availableHuntGroupTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->availableHuntGroupTable;
    }

    /**
     * Setter for availableHuntGroupTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $availableHuntGroupTable
     * @return $this
     */
    public function setAvailableHuntGroupTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $availableHuntGroupTable)
    {
        $this->availableHuntGroupTable = $availableHuntGroupTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvailableHuntGroupTable()
    {
        $this->availableHuntGroupTable = null;
        return $this;
    }
}

