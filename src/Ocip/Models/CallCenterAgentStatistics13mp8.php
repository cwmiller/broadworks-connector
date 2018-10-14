<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAgentStatistics13mp8
 *
 * Contains Call Center statistics for a specified agent.
 */
class CallCenterAgentStatistics13mp8
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
     * @ElementName statisticsYesterday
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8|null
     */
    private $statisticsYesterday = null;

    /**
     * @ElementName statisticsToday
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8|null
     */
    private $statisticsToday = null;

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
     * Getter for statisticsYesterday
     *
     * @ElementName statisticsYesterday
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8|null
     */
    public function getStatisticsYesterday()
    {
        return $this->statisticsYesterday;
    }

    /**
     * Setter for statisticsYesterday
     *
     * @ElementName statisticsYesterday
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8|null $statisticsYesterday
     * @return $this
     */
    public function setStatisticsYesterday(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8 $statisticsYesterday)
    {
        $this->statisticsYesterday = $statisticsYesterday;
        return $this;
    }

    /**
     * Getter for statisticsToday
     *
     * @ElementName statisticsToday
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8|null
     */
    public function getStatisticsToday()
    {
        return $this->statisticsToday;
    }

    /**
     * Setter for statisticsToday
     *
     * @ElementName statisticsToday
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8|null $statisticsToday
     * @return $this
     */
    public function setStatisticsToday(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8 $statisticsToday)
    {
        $this->statisticsToday = $statisticsToday;
        return $this;
    }


}

