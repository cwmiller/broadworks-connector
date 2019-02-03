<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListResponse
 *
 * Response to the EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address", "Agent Threshold Profile";
 *
 * @see EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:529","type":"sequence"}]
 */
class EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName agentTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e2c537e3e39483b96620673a7012ffdd:529
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

