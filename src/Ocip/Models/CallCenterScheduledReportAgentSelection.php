<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportAgentSelection
 *
 * Either all agents or list of agents.
 *
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7565","type":"choice"}]
 */
class CallCenterScheduledReportAgentSelection
{
    /**
     * @ElementName allAgent
     * @Type bool
     * @Group 4d65d3449061c568639c8cc1e2492285:7565
     * @var bool|null
     */
    protected $allAgent = null;

    /**
     * @ElementName agentUserId
     * @Type string
     * @Array
     * @Group 4d65d3449061c568639c8cc1e2492285:7565
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $agentUserId = [
        
    ];

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
     * Getter for agentUserId
     *
     * @return string[]
     */
    public function getAgentUserId()
    {
        return $this->agentUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUserId;
    }

    /**
     * Setter for agentUserId
     *
     * @param string[] $agentUserId
     * @return $this
     */
    public function setAgentUserId(array $agentUserId)
    {
        $this->agentUserId = $agentUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentUserId()
    {
        $this->agentUserId = null;
        return $this;
    }

    /**
     * Adder for agentUserId
     *
     * @param string $agentUserId
     * @return $this
     */
    public function addAgentUserId(string $agentUserId)
    {
        $this->agentUserId[] = $agentUserId;
        return $this;
    }
}

