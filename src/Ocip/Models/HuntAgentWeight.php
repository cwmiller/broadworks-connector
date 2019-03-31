<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * HuntAgentWeight
 *
 * The weighted call distribution weight for an agent.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2471","type":"sequence"}]
 */
class HuntAgentWeight
{

    /**
     * @ElementName agentUserId
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2471
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $agentUserId = null;

    /**
     * @ElementName weight
     * @Type int
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2471
     * @MinInclusive
     * @MaxInclusive 100
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

