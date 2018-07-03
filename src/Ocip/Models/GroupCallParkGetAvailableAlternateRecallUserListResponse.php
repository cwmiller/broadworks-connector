<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallParkGetAvailableAlternateRecallUserListResponse
 *
 * Response to the GroupCallParkGetAvailableAlternateRecallUserListResponse.
 *         Contains a table with column headings: "User Id", "Last Name", "First
 * Name", "Hiragana Last Name", "Hiragana First Name".
 *
 * @see GroupCallParkGetAvailableAlternateRecallUserListResponse
 */
class GroupCallParkGetAvailableAlternateRecallUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableHuntGroupTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $availableHuntGroupTable = null;

    /**
     * Getter for availableHuntGroupTable
     *
     * @ElementName availableHuntGroupTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAvailableHuntGroupTable()
    {
        return $this->availableHuntGroupTable;
    }

    /**
     * Setter for availableHuntGroupTable
     *
     * @ElementName availableHuntGroupTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $availableHuntGroupTable
     * @return $this
     */
    public function setAvailableHuntGroupTable($availableHuntGroupTable)
    {
        $this->availableHuntGroupTable = $availableHuntGroupTable;
        return $this;
    }


}

