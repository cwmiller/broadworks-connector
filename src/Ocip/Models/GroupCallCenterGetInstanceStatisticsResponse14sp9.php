<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceStatisticsResponse14sp9
 *
 * Contains Call Center statistics.
 *
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:4190","type":"sequence"}]
 */
class GroupCallCenterGetInstanceStatisticsResponse14sp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName statisticsRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsRange
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:4190
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsRange|null
     */
    private $statisticsRange = null;

    /**
     * @ElementName queueStatistics
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics14sp9
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:4190
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics14sp9|null
     */
    private $queueStatistics = null;

    /**
     * @ElementName agentStatistics
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics14sp9
     * @Array
     * @Optional
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:4190
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics14sp9[]
     */
    private $agentStatistics = array(
        
    );

    /**
     * Getter for statisticsRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsRange
     */
    public function getStatisticsRange()
    {
        return $this->statisticsRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statisticsRange;
    }

    /**
     * Setter for statisticsRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsRange $statisticsRange
     * @return $this
     */
    public function setStatisticsRange(\CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsRange $statisticsRange)
    {
        $this->statisticsRange = $statisticsRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatisticsRange()
    {
        $this->statisticsRange = null;
        return $this;
    }

    /**
     * Getter for queueStatistics
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics14sp9
     */
    public function getQueueStatistics()
    {
        return $this->queueStatistics instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->queueStatistics;
    }

    /**
     * Setter for queueStatistics
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics14sp9 $queueStatistics
     * @return $this
     */
    public function setQueueStatistics(\CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics14sp9 $queueStatistics)
    {
        $this->queueStatistics = $queueStatistics;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetQueueStatistics()
    {
        $this->queueStatistics = null;
        return $this;
    }

    /**
     * Getter for agentStatistics
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics14sp9[]
     */
    public function getAgentStatistics()
    {
        return $this->agentStatistics instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentStatistics;
    }

    /**
     * Setter for agentStatistics
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics14sp9[] $agentStatistics
     * @return $this
     */
    public function setAgentStatistics(array $agentStatistics)
    {
        $this->agentStatistics = $agentStatistics;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentStatistics()
    {
        $this->agentStatistics = null;
        return $this;
    }

    /**
     * Adder for agentStatistics
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics14sp9 $agentStatistics
     * @return $this
     */
    public function addAgentStatistics($agentStatistics)
    {
        $this->agentStatistics[] = $agentStatistics;
        return $this;
    }


}

