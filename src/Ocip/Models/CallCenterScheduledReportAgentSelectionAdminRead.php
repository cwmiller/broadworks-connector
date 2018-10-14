<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportAgentSelectionAdminRead
 *
 * Either all agents or 2 list of agents: one for current and one for past
 * (deleted) agents. 
 *          This is used when an admin reads a Scheduled Report.
 *          Each agent table has the following column headings:
 *          "User Id", "Last Name", "First Name", "Hiragana Last Name" and
 * "Hiragana First Name".
 */
class CallCenterScheduledReportAgentSelectionAdminRead
{

    /**
     * @ElementName allAgent
     * @var bool|null
     */
    private $allAgent = null;

    /**
     * @ElementName currentAgentTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $currentAgentTable = null;

    /**
     * @ElementName pastAgentTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $pastAgentTable = null;

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
     * Getter for currentAgentTable
     *
     * @ElementName currentAgentTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCurrentAgentTable()
    {
        return $this->currentAgentTable;
    }

    /**
     * Setter for currentAgentTable
     *
     * @ElementName currentAgentTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $currentAgentTable
     * @return $this
     */
    public function setCurrentAgentTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $currentAgentTable)
    {
        $this->currentAgentTable = $currentAgentTable;
        return $this;
    }

    /**
     * Getter for pastAgentTable
     *
     * @ElementName pastAgentTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getPastAgentTable()
    {
        return $this->pastAgentTable;
    }

    /**
     * Setter for pastAgentTable
     *
     * @ElementName pastAgentTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $pastAgentTable
     * @return $this
     */
    public function setPastAgentTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $pastAgentTable)
    {
        $this->pastAgentTable = $pastAgentTable;
        return $this;
    }


}

