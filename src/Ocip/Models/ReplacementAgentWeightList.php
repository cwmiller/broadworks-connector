<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementAgentWeightList
 *
 * A list of agent userIds and hunt agent weights that replaces the previously
 * configured list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class ReplacementAgentWeightList
{

    /**
     * @ElementName agentWeight
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight[]
     */
    private $agentWeight = array(
        
    );

    /**
     * Getter for agentWeight
     *
     * @ElementName agentWeight
     * @return \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight[]
     */
    public function getAgentWeight()
    {
        return $this->agentWeight;
    }

    /**
     * Setter for agentWeight
     *
     * @ElementName agentWeight
     * @param \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight[] $agentWeight
     * @return $this
     */
    public function setAgentWeight($agentWeight)
    {
        $this->agentWeight = $agentWeight;
        return $this;
    }

    /**
     * Adder for agentWeight
     *
     * @ElementName agentWeight
     * @param \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight $agentWeight
     * @return $this
     */
    public function addAgentWeight($agentWeight)
    {
        $this->agentWeight []= $agentWeight;
        return $this;
    }


}

