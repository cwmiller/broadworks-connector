<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReplacementSkilledAgents
 *
 * A list of agents grouped by skill levels.
 *
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:6622","type":"sequence"}]
 */
class CallCenterReplacementSkilledAgents
{

    /**
     * @ElementName skillLevel
     * @Type int
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6622
     * @var int|null
     */
    private $skillLevel = null;

    /**
     * @ElementName agents
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6622
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $agents = null;

    /**
     * Getter for skillLevel
     *
     * @return int
     */
    public function getSkillLevel()
    {
        return $this->skillLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->skillLevel;
    }

    /**
     * Setter for skillLevel
     *
     * @param int $skillLevel
     * @return $this
     */
    public function setSkillLevel($skillLevel)
    {
        $this->skillLevel = $skillLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSkillLevel()
    {
        $this->skillLevel = null;
        return $this;
    }

    /**
     * Getter for agents
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getAgents()
    {
        return $this->agents instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agents;
    }

    /**
     * Setter for agents
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $agents
     * @return $this
     */
    public function setAgents(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $agents)
    {
        if ($agents === null) {
            $this->agents = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->agents = $agents;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgents()
    {
        $this->agents = null;
        return $this;
    }


}

