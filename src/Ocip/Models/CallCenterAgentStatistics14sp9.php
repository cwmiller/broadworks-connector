<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAgentStatistics14sp9
 *
 * Contains Call Center statistics for a specified agent.
 */
class CallCenterAgentStatistics14sp9
{

    /**
     * @ElementName agentUserId
     * @var string|null
     */
    private $agentUserId = null;

    /**
     * @ElementName agentDisplayNames
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserDisplayNames|null
     */
    private $agentDisplayNames = null;

    /**
     * @ElementName available
     * @var bool|null
     */
    private $available = null;

    /**
     * @ElementName statistics
     * @var \CWM\BroadWorksConnector\Ocip\Models\AgentStatistics|null
     */
    private $statistics = null;

    /**
     * Getter for agentUserId
     *
     * @ElementName agentUserId
     * @return string|null
     */
    public function getAgentUserId()
    {
        return $this->agentUserId;
    }

    /**
     * Setter for agentUserId
     *
     * @ElementName agentUserId
     * @param string|null $agentUserId
     * @return $this
     */
    public function setAgentUserId($agentUserId)
    {
        $this->agentUserId = $agentUserId;
        return $this;
    }

    /**
     * Getter for agentDisplayNames
     *
     * @ElementName agentDisplayNames
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserDisplayNames|null
     */
    public function getAgentDisplayNames()
    {
        return $this->agentDisplayNames;
    }

    /**
     * Setter for agentDisplayNames
     *
     * @ElementName agentDisplayNames
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserDisplayNames|null $agentDisplayNames
     * @return $this
     */
    public function setAgentDisplayNames(\CWM\BroadWorksConnector\Ocip\Models\UserDisplayNames $agentDisplayNames)
    {
        $this->agentDisplayNames = $agentDisplayNames;
        return $this;
    }

    /**
     * Getter for available
     *
     * @ElementName available
     * @return bool|null
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Setter for available
     *
     * @ElementName available
     * @param bool|null $available
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }

    /**
     * Getter for statistics
     *
     * @ElementName statistics
     * @return \CWM\BroadWorksConnector\Ocip\Models\AgentStatistics|null
     */
    public function getStatistics()
    {
        return $this->statistics;
    }

    /**
     * Setter for statistics
     *
     * @ElementName statistics
     * @param \CWM\BroadWorksConnector\Ocip\Models\AgentStatistics|null $statistics
     * @return $this
     */
    public function setStatistics(\CWM\BroadWorksConnector\Ocip\Models\AgentStatistics $statistics)
    {
        $this->statistics = $statistics;
        return $this;
    }


}

