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
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAgents()
    {
        return $this->agents;
    }

    /**
     * Setter for agents
     *
     * @ElementName agents
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil $agents
     * @return $this
     */
    public function setAgents(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $agents)
    {
        $this->agents = $agents;
        return $this;
    }


}

