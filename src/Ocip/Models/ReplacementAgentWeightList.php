<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementAgentWeightList
 *
 * A list of agent userIds and hunt agent weights that replaces the previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2939","type":"sequence"}]
 */
class ReplacementAgentWeightList
{

    /**
     * @ElementName agentWeight
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight
     * @Array
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2939
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight[]
     */
    private $agentWeight = array(
        
    );

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

