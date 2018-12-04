<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAgentStatistics13mp8
 *
 * Contains Call Center statistics for a specified agent.
 *
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:38376","type":"sequence"}]
 */
class CallCenterAgentStatistics13mp8
{

    /**
     * @ElementName agentUserId
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:38376
     * @var string|null
     */
    private $agentUserId = null;

    /**
     * @ElementName agentDisplayNames
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserDisplayNames
     * @Group 1a79c7896cb04feac6eff47a5321756e:38376
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserDisplayNames|null
     */
    private $agentDisplayNames = null;

    /**
     * @ElementName available
     * @Type bool
     * @Group 1a79c7896cb04feac6eff47a5321756e:38376
     * @var bool|null
     */
    private $available = null;

    /**
     * @ElementName statisticsYesterday
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8
     * @Group 1a79c7896cb04feac6eff47a5321756e:38376
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8|null
     */
    private $statisticsYesterday = null;

    /**
     * @ElementName statisticsToday
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8
     * @Group 1a79c7896cb04feac6eff47a5321756e:38376
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8|null
     */
    private $statisticsToday = null;

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
     * Getter for statisticsYesterday
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8
     */
    public function getStatisticsYesterday()
    {
        return $this->statisticsYesterday instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statisticsYesterday;
    }

    /**
     * Setter for statisticsYesterday
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8 $statisticsYesterday
     * @return $this
     */
    public function setStatisticsYesterday(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8 $statisticsYesterday)
    {
        $this->statisticsYesterday = $statisticsYesterday;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatisticsYesterday()
    {
        $this->statisticsYesterday = null;
        return $this;
    }

    /**
     * Getter for statisticsToday
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8
     */
    public function getStatisticsToday()
    {
        return $this->statisticsToday instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statisticsToday;
    }

    /**
     * Setter for statisticsToday
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8 $statisticsToday
     * @return $this
     */
    public function setStatisticsToday(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentDailyStatistics13mp8 $statisticsToday)
    {
        $this->statisticsToday = $statisticsToday;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatisticsToday()
    {
        $this->statisticsToday = null;
        return $this;
    }


}

