<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterScheduledReportAgentSelection
 *
 * Either all agents or list of agents.
 *
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:7550","type":"choice"}]
 */
class CallCenterScheduledReportAgentSelection
{

    /**
     * @ElementName allAgent
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:7550
     * @var bool|null
     */
    private $allAgent = null;

    /**
     * @ElementName agentUserId
     * @Type string
     * @Array
     * @Group e2c537e3e39483b96620673a7012ffdd:7550
     * @MinLength 1
     * @MaxLength 161
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

