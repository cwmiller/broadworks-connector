<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetListInServiceProviderResponse
 *
 * Response to GroupGetListInServiceProviderRequest.
 *         Contains a 3 column table with column headings: "Group Id", "Group
 * Name", "User Limit"
 *         and a row for each group.
 *
 * @see GroupGetListInServiceProviderRequest
 */
class GroupGetListInServiceProviderResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupTable = null;

    /**
     * Getter for groupTable
     *
     * @ElementName groupTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getGroupTable()
    {
        return $this->groupTable;
    }

    /**
     * Setter for groupTable
     *
     * @ElementName groupTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $groupTable
     * @return $this
     */
    public function setGroupTable($groupTable)
    {
        $this->groupTable = $groupTable;
        return $this;
    }


}

