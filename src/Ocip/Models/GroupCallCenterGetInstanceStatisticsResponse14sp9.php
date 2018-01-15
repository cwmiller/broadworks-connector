<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceStatisticsResponse14sp9
 *
 * Contains Call Center statistics.
 */
class GroupCallCenterGetInstanceStatisticsResponse14sp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName statisticsRange
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsRange|null
     */
    private $statisticsRange = null;

    /**
     * @ElementName queueStatistics
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics14sp9|null
     */
    private $queueStatistics = null;

    /**
     * @ElementName agentStatistics
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics14sp9[]
     */
    private $agentStatistics = array(
        
    );

    /**
     * Getter for statisticsRange
     *
     * @ElementName statisticsRange
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsRange|null
     */
    public function getStatisticsRange()
    {
        return $this->statisticsRange;
    }

    /**
     * Setter for statisticsRange
     *
     * @ElementName statisticsRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsRange|null $statisticsRange
     * @return $this
     */
    public function setStatisticsRange($statisticsRange)
    {
        $this->statisticsRange = $statisticsRange;
        return $this;
    }

    /**
     * Getter for queueStatistics
     *
     * @ElementName queueStatistics
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics14sp9|null
     */
    public function getQueueStatistics()
    {
        return $this->queueStatistics;
    }

    /**
     * Setter for queueStatistics
     *
     * @ElementName queueStatistics
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics14sp9|null $queueStatistics
     * @return $this
     */
    public function setQueueStatistics($queueStatistics)
    {
        $this->queueStatistics = $queueStatistics;
        return $this;
    }

    /**
     * Getter for agentStatistics
     *
     * @ElementName agentStatistics
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics14sp9[]
     */
    public function getAgentStatistics()
    {
        return $this->agentStatistics;
    }

    /**
     * Setter for agentStatistics
     *
     * @ElementName agentStatistics
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics14sp9[] $agentStatistics
     * @return $this
     */
    public function setAgentStatistics($agentStatistics)
    {
        $this->agentStatistics = $agentStatistics;
        return $this;
    }

    /**
     * Adder for agentStatistics
     *
     * @ElementName agentStatistics
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics14sp9 $agentStatistics
     * @return $this
     */
    public function addAgentStatistics($agentStatistics)
    {
        $this->agentStatistics []= $agentStatistics;
        return $this;
    }


}

