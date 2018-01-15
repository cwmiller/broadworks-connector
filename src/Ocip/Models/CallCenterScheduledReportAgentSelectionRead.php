<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportAgentSelectionRead
 *
 * Either all agents or list of agents.
 *         The agent table has the following column headings:
 *         "User Id", "Last Name", "First Name", "Hiragana Last Name" and "Hiragana
 * First Name".
 */
class CallCenterScheduledReportAgentSelectionRead
{

    /**
     * @ElementName allAgent
     * @var bool|null
     */
    private $allAgent = null;

    /**
     * @ElementName agentTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $agentTable = null;

    /**
     * Getter for allAgent
     *
     * @ElementName allAgent
     * @return bool|null
     */
    public function getAllAgent()
    {
        return $this->allAgent;
    }

    /**
     * Setter for allAgent
     *
     * @ElementName allAgent
     * @param bool|null $allAgent
     * @return $this
     */
    public function setAllAgent($allAgent)
    {
        $this->allAgent = $allAgent;
        return $this;
    }

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
    public function setAgentTable($agentTable)
    {
        $this->agentTable = $agentTable;
        return $this;
    }


}

