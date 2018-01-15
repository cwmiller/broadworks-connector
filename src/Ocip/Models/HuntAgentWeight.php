<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * HuntAgentWeight
 *
 * The weighted call distribution weight for an agent.
 */
class HuntAgentWeight
{

    /**
     * @ElementName agentUserId
     * @var string|null
     */
    private $agentUserId = null;

    /**
     * @ElementName weight
     * @var int|null
     */
    private $weight = null;

    /**
     * Getter for agentUserId
     *
     * @ElementName agentUserId
     * @return string|null
     */
    public function getAgentUserId()
    {
        return $this->agentUserId;
    }

    /**
     * Setter for agentUserId
     *
     * @ElementName agentUserId
     * @param string|null $agentUserId
     * @return $this
     */
    public function setAgentUserId($agentUserId)
    {
        $this->agentUserId = $agentUserId;
        return $this;
    }

    /**
     * Getter for weight
     *
     * @ElementName weight
     * @return int|null
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Setter for weight
     *
     * @ElementName weight
     * @param int|null $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }


}

