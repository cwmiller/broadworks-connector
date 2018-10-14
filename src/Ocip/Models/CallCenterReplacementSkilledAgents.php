<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReplacementSkilledAgents
 *
 * A list of agents grouped by skill levels.
 */
class CallCenterReplacementSkilledAgents
{

    /**
     * @ElementName skillLevel
     * @var int|null
     */
    private $skillLevel = null;

    /**
     * @ElementName agents
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    private $agents = null;

    /**
     * Getter for skillLevel
     *
     * @ElementName skillLevel
     * @return int|null
     */
    public function getSkillLevel()
    {
        return $this->skillLevel;
    }

    /**
     * Setter for skillLevel
     *
     * @ElementName skillLevel
     * @param int|null $skillLevel
     * @return $this
     */
    public function setSkillLevel($skillLevel)
    {
        $this->skillLevel = $skillLevel;
        return $this;
    }

    /**
     * Getter for agents
     *
     * @ElementName agents
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getAgents()
    {
        return $this->agents;
    }

    /**
     * Setter for agents
     *
     * @ElementName agents
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $agents
     * @return $this
     */
    public function setAgents(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $agents)
    {
        $this->agents = $agents;
        return $this;
    }


}

