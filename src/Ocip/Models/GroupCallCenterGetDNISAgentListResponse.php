<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetDNISAgentListResponse
 *
 * Response to the GroupCallCenterGetDNISAgentListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address".
 *
 * @see GroupCallCenterGetDNISAgentListRequest
 */
class GroupCallCenterGetDNISAgentListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName agentTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $agentTable = null;

    /**
     * Getter for agentTable
     *
     * @ElementName agentTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAgentTable()
    {
        return $this->agentTable;
    }

    /**
     * Setter for agentTable
     *
     * @ElementName agentTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $agentTable
     * @return $this
     */
    public function setAgentTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $agentTable)
    {
        $this->agentTable = $agentTable;
        return $this;
    }


}

