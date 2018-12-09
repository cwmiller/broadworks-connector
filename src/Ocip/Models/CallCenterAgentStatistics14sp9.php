<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAgentStatistics14sp9
 *
 * Contains Call Center statistics for a specified agent.
 *
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:6555","type":"sequence"}]
 */
class CallCenterAgentStatistics14sp9
{

    /**
     * @ElementName agentUserId
     * @Type string
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6555
     * @var string|null
     */
    private $agentUserId = null;

    /**
     * @ElementName agentDisplayNames
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserDisplayNames
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6555
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserDisplayNames|null
     */
    private $agentDisplayNames = null;

    /**
     * @ElementName available
     * @Type bool
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6555
     * @var bool|null
     */
    private $available = null;

    /**
     * @ElementName statistics
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AgentStatistics
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6555
     * @var \CWM\BroadWorksConnector\Ocip\Models\AgentStatistics|null
     */
    private $statistics = null;

    /**
     * Getter for agentUserId
     *
     * @return string
     */
    public function getAgentUserId()
    {
        return $this->agentUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUserId;
    }

    /**
     * Setter for agentUserId
     *
     * @param string $agentUserId
     * @return $this
     */
    public function setAgentUserId($agentUserId)
    {
        $this->agentUserId = $agentUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentUserId()
    {
        $this->agentUserId = null;
        return $this;
    }

    /**
     * Getter for agentDisplayNames
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserDisplayNames
     */
    public function getAgentDisplayNames()
    {
        return $this->agentDisplayNames instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentDisplayNames;
    }

    /**
     * Setter for agentDisplayNames
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserDisplayNames $agentDisplayNames
     * @return $this
     */
    public function setAgentDisplayNames(\CWM\BroadWorksConnector\Ocip\Models\UserDisplayNames $agentDisplayNames)
    {
        $this->agentDisplayNames = $agentDisplayNames;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentDisplayNames()
    {
        $this->agentDisplayNames = null;
        return $this;
    }

    /**
     * Getter for available
     *
     * @return bool
     */
    public function getAvailable()
    {
        return $this->available instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->available;
    }

    /**
     * Setter for available
     *
     * @param bool $available
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvailable()
    {
        $this->available = null;
        return $this;
    }

    /**
     * Getter for statistics
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AgentStatistics
     */
    public function getStatistics()
    {
        return $this->statistics instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statistics;
    }

    /**
     * Setter for statistics
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AgentStatistics $statistics
     * @return $this
     */
    public function setStatistics(\CWM\BroadWorksConnector\Ocip\Models\AgentStatistics $statistics)
    {
        $this->statistics = $statistics;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatistics()
    {
        $this->statistics = null;
        return $this;
    }


}

