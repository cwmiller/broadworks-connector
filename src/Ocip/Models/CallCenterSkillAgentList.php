<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterSkillAgentList
 *
 * A list of agents for a particular skill Level.
 */
class CallCenterSkillAgentList
{

    /**
     * @ElementName skillLevel
     * @var int|null
     */
    private $skillLevel = null;

    /**
     * @ElementName agent
     * @var string[]
     */
    private $agent = array(
        
    );

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
     * Getter for agent
     *
     * @ElementName agent
     * @return string[]
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Setter for agent
     *
     * @ElementName agent
     * @param string[] $agent
     * @return $this
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;
        return $this;
    }

    /**
     * Adder for agent
     *
     * @ElementName agent
     * @param string $agent
     * @return $this
     */
    public function addAgent($agent)
    {
        $this->agent []= $agent;
        return $this;
    }


}

