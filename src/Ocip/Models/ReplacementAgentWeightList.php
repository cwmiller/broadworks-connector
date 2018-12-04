<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementAgentWeightList
 *
 * A list of agent userIds and hunt agent weights that replaces the previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:2683","type":"sequence"}]
 */
class ReplacementAgentWeightList
{

    /**
     * @ElementName agentWeight
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight
     * @Array
     * @Group 18b369af88e42ffdb4166615c670ce2c:2683
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

