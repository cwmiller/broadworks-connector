<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetAgentPagedSortedListResponse
 *
 * Response to the GroupCallCenterGetAgentPagedSortedListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name", "Weight",
 *         "Phone Number", "Extension", "Department", "Email Address", "Skill Level".
 *
 * @see GroupCallCenterGetAgentPagedSortedListRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:4047","type":"sequence"}]
 */
class GroupCallCenterGetAgentPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName agentTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e2c537e3e39483b96620673a7012ffdd:4047
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $agentTable = null;

    /**
     * Getter for agentTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAgentTable()
    {
        return $this->agentTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentTable;
    }

    /**
     * Setter for agentTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $agentTable
     * @return $this
     */
    public function setAgentTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $agentTable)
    {
        $this->agentTable = $agentTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentTable()
    {
        $this->agentTable = null;
        return $this;
    }


}

