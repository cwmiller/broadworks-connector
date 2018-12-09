<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * HuntAgentWeight
 *
 * The weighted call distribution weight for an agent.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:2124","type":"sequence"}]
 */
class HuntAgentWeight
{

    /**
     * @ElementName agentUserId
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:2124
     * @var string|null
     */
    private $agentUserId = null;

    /**
     * @ElementName weight
     * @Type int
     * @Group 8e629edbac315ae7889caca732382c44:2124
     * @var int|null
     */
    private $weight = null;

    /**
     * Getter for agentUserId
     *
     * @return string
     */
    public function getAgentUserId()
    {
        return $this->agentUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUserId;
    }

    /**
     * Setter for agentUserId
     *
     * @param string $agentUserId
     * @return $this
     */
    public function setAgentUserId($agentUserId)
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
     * Getter for weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->weight;
    }

    /**
     * Setter for weight
     *
     * @param int $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWeight()
    {
        $this->weight = null;
        return $this;
    }


}

