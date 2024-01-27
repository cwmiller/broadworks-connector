<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * HuntAgentWeight
 *
 * The weighted call distribution weight for an agent.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:3422","type":"sequence"}]
 */
class HuntAgentWeight
{
    /**
     * @ElementName agentUserId
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3422
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $agentUserId = null;

    /**
     * @ElementName weight
     * @Type int
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3422
     * @MinInclusive 0
     * @MaxInclusive 100
     * @var int|null
     */
    protected $weight = null;

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

