<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportAgentSelection
 *
 * Either all agents or list of agents.
 */
class CallCenterScheduledReportAgentSelection
{

    /**
     * @ElementName allAgent
     * @var bool|null
     */
    private $allAgent = null;

    /**
     * @ElementName agentUserId
     * @var string[]
     */
    private $agentUserId = array(
        
    );

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
     * Getter for agentUserId
     *
     * @ElementName agentUserId
     * @return string[]
     */
    public function getAgentUserId()
    {
        return $this->agentUserId;
    }

    /**
     * Setter for agentUserId
     *
     * @ElementName agentUserId
     * @param string[] $agentUserId
     * @return $this
     */
    public function setAgentUserId($agentUserId)
    {
        $this->agentUserId = $agentUserId;
        return $this;
    }

    /**
     * Adder for agentUserId
     *
     * @ElementName agentUserId
     * @param string $agentUserId
     * @return $this
     */
    public function addAgentUserId($agentUserId)
    {
        $this->agentUserId []= $agentUserId;
        return $this;
    }


}

