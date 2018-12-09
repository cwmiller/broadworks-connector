<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentListResponse
 *
 * Response to the EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address", "Agent Threshold Profile";
 *
 * @see EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentListRequest
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:457","type":"sequence"}]
 */
class EnterpriseCallCenterAgentThresholdProfileGetAvailableAgentListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName agentTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:457
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

