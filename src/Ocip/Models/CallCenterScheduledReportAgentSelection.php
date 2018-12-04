<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportAgentSelection
 *
 * Either all agents or list of agents.
 *
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:6804","type":"choice"}]
 */
class CallCenterScheduledReportAgentSelection
{

    /**
     * @ElementName allAgent
     * @Type bool
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:6804
     * @var bool|null
     */
    private $allAgent = null;

    /**
     * @ElementName agentUserId
     * @Type string
     * @Array
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:6804
     * @var string[]
     */
    private $agentUserId = array(
        
    );

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

