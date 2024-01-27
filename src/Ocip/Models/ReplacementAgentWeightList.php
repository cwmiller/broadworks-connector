<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementAgentWeightList
 *
 * A list of agent userIds and hunt agent weights that replaces the previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4180","type":"sequence"}]
 */
class ReplacementAgentWeightList
{
    /**
     * @ElementName agentWeight
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4180
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight[]
     */
    protected $agentWeight = [
        
    ];

    /**
     * Getter for agentWeight
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight[]
     */
    public function getAgentWeight()
    {
        return $this->agentWeight instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentWeight;
    }

    /**
     * Setter for agentWeight
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight[] $agentWeight
     * @return $this
     */
    public function setAgentWeight(array $agentWeight)
    {
        $this->agentWeight = $agentWeight;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentWeight()
    {
        $this->agentWeight = null;
        return $this;
    }

    /**
     * Adder for agentWeight
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight $agentWeight
     * @return $this
     */
    public function addAgentWeight($agentWeight)
    {
        $this->agentWeight[] = $agentWeight;
        return $this;
    }
}

