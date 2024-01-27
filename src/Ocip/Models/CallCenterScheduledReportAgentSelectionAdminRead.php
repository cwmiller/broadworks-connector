<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportAgentSelectionAdminRead
 *
 * Either all agents or 2 list of agents: one for current and one for past (deleted) agents. 
 *          This is used when an admin reads a Scheduled Report.
 *          Each agent table has the following column headings:
 *          "User Id", "Last Name", "First Name", "Hiragana Last Name" and "Hiragana First Name".
 *
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7580","type":"choice","children":[{"id":"4d65d3449061c568639c8cc1e2492285:7582","type":"sequence"}]}]
 */
class CallCenterScheduledReportAgentSelectionAdminRead
{
    /**
     * @ElementName allAgent
     * @Type bool
     * @Group 4d65d3449061c568639c8cc1e2492285:7580
     * @var bool|null
     */
    protected $allAgent = null;

    /**
     * @ElementName currentAgentTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4d65d3449061c568639c8cc1e2492285:7582
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $currentAgentTable = null;

    /**
     * @ElementName pastAgentTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4d65d3449061c568639c8cc1e2492285:7582
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $pastAgentTable = null;

    /**
     * Getter for allAgent
     *
     * @return bool
     */
    public function getAllAgent()
    {
        return $this->allAgent instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allAgent;
    }

    /**
     * Setter for allAgent
     *
     * @param bool $allAgent
     * @return $this
     */
    public function setAllAgent($allAgent)
    {
        $this->allAgent = $allAgent;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllAgent()
    {
        $this->allAgent = null;
        return $this;
    }

    /**
     * Getter for currentAgentTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCurrentAgentTable()
    {
        return $this->currentAgentTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->currentAgentTable;
    }

    /**
     * Setter for currentAgentTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $currentAgentTable
     * @return $this
     */
    public function setCurrentAgentTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $currentAgentTable)
    {
        $this->currentAgentTable = $currentAgentTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCurrentAgentTable()
    {
        $this->currentAgentTable = null;
        return $this;
    }

    /**
     * Getter for pastAgentTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getPastAgentTable()
    {
        return $this->pastAgentTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pastAgentTable;
    }

    /**
     * Setter for pastAgentTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $pastAgentTable
     * @return $this
     */
    public function setPastAgentTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $pastAgentTable)
    {
        $this->pastAgentTable = $pastAgentTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPastAgentTable()
    {
        $this->pastAgentTable = null;
        return $this;
    }
}

