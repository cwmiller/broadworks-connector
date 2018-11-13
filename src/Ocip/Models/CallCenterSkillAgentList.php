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
     * @Type int
     * @var int|null
     */
    private $skillLevel = null;

    /**
     * @ElementName agent
     * @Type string
     * @Array
     * @var string[]
     */
    private $agent = array(
        
    );

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
     * Getter for agent
     *
     * @return string[]
     */
    public function getAgent()
    {
        return $this->agent instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agent;
    }

    /**
     * Setter for agent
     *
     * @param string[] $agent
     * @return $this
     */
    public function setAgent(array $agent)
    {
        $this->agent = $agent;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgent()
    {
        $this->agent = null;
        return $this;
    }

    /**
     * Adder for agent
     *
     * @param string $agent
     * @return $this
     */
    public function addAgent(string $agent)
    {
        $this->agent[] = $agent;
        return $this;
    }


}

