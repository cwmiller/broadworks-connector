<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceStatisticsResponse13mp8
 *
 * Contains Call Center statistics.
 *         Replaced By: GroupCallCenterGetInstanceStatisticsResponse14sp9
 *
 * @see GroupCallCenterGetInstanceStatisticsResponse14sp9
 */
class GroupCallCenterGetInstanceStatisticsResponse13mp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName numberOfCallsQueuedNow
     * @var int|null
     */
    private $numberOfCallsQueuedNow = null;

    /**
     * @ElementName generateDailyReport
     * @var bool|null
     */
    private $generateDailyReport = null;

    /**
     * @ElementName collectionPeriodMinutes
     * @var int|null
     */
    private $collectionPeriodMinutes = null;

    /**
     * @ElementName reportingEmailAddress1
     * @var string|null
     */
    private $reportingEmailAddress1 = null;

    /**
     * @ElementName reportingEmailAddress2
     * @var string|null
     */
    private $reportingEmailAddress2 = null;

    /**
     * @ElementName queueStatisticsYesterday
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics13mp8|null
     */
    private $queueStatisticsYesterday = null;

    /**
     * @ElementName queueStatisticsToday
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics13mp8|null
     */
    private $queueStatisticsToday = null;

    /**
     * @ElementName agentStatistics
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics13mp8[]
     */
    private $agentStatistics = array(
        
    );

    /**
     * Getter for numberOfCallsQueuedNow
     *
     * @ElementName numberOfCallsQueuedNow
     * @return int|null
     */
    public function getNumberOfCallsQueuedNow()
    {
        return $this->numberOfCallsQueuedNow;
    }

    /**
     * Setter for numberOfCallsQueuedNow
     *
     * @ElementName numberOfCallsQueuedNow
     * @param int|null $numberOfCallsQueuedNow
     * @return $this
     */
    public function setNumberOfCallsQueuedNow($numberOfCallsQueuedNow)
    {
        $this->numberOfCallsQueuedNow = $numberOfCallsQueuedNow;
        return $this;
    }

    /**
     * Getter for generateDailyReport
     *
     * @ElementName generateDailyReport
     * @return bool|null
     */
    public function getGenerateDailyReport()
    {
        return $this->generateDailyReport;
    }

    /**
     * Setter for generateDailyReport
     *
     * @ElementName generateDailyReport
     * @param bool|null $generateDailyReport
     * @return $this
     */
    public function setGenerateDailyReport($generateDailyReport)
    {
        $this->generateDailyReport = $generateDailyReport;
        return $this;
    }

    /**
     * Getter for collectionPeriodMinutes
     *
     * @ElementName collectionPeriodMinutes
     * @return int|null
     */
    public function getCollectionPeriodMinutes()
    {
        return $this->collectionPeriodMinutes;
    }

    /**
     * Setter for collectionPeriodMinutes
     *
     * @ElementName collectionPeriodMinutes
     * @param int|null $collectionPeriodMinutes
     * @return $this
     */
    public function setCollectionPeriodMinutes($collectionPeriodMinutes)
    {
        $this->collectionPeriodMinutes = $collectionPeriodMinutes;
        return $this;
    }

    /**
     * Getter for reportingEmailAddress1
     *
     * @ElementName reportingEmailAddress1
     * @return string|null
     */
    public function getReportingEmailAddress1()
    {
        return $this->reportingEmailAddress1;
    }

    /**
     * Setter for reportingEmailAddress1
     *
     * @ElementName reportingEmailAddress1
     * @param string|null $reportingEmailAddress1
     * @return $this
     */
    public function setReportingEmailAddress1($reportingEmailAddress1)
    {
        $this->reportingEmailAddress1 = $reportingEmailAddress1;
        return $this;
    }

    /**
     * Getter for reportingEmailAddress2
     *
     * @ElementName reportingEmailAddress2
     * @return string|null
     */
    public function getReportingEmailAddress2()
    {
        return $this->reportingEmailAddress2;
    }

    /**
     * Setter for reportingEmailAddress2
     *
     * @ElementName reportingEmailAddress2
     * @param string|null $reportingEmailAddress2
     * @return $this
     */
    public function setReportingEmailAddress2($reportingEmailAddress2)
    {
        $this->reportingEmailAddress2 = $reportingEmailAddress2;
        return $this;
    }

    /**
     * Getter for queueStatisticsYesterday
     *
     * @ElementName queueStatisticsYesterday
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics13mp8|null
     */
    public function getQueueStatisticsYesterday()
    {
        return $this->queueStatisticsYesterday;
    }

    /**
     * Setter for queueStatisticsYesterday
     *
     * @ElementName queueStatisticsYesterday
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics13mp8|null $queueStatisticsYesterday
     * @return $this
     */
    public function setQueueStatisticsYesterday($queueStatisticsYesterday)
    {
        $this->queueStatisticsYesterday = $queueStatisticsYesterday;
        return $this;
    }

    /**
     * Getter for queueStatisticsToday
     *
     * @ElementName queueStatisticsToday
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics13mp8|null
     */
    public function getQueueStatisticsToday()
    {
        return $this->queueStatisticsToday;
    }

    /**
     * Setter for queueStatisticsToday
     *
     * @ElementName queueStatisticsToday
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics13mp8|null $queueStatisticsToday
     * @return $this
     */
    public function setQueueStatisticsToday($queueStatisticsToday)
    {
        $this->queueStatisticsToday = $queueStatisticsToday;
        return $this;
    }

    /**
     * Getter for agentStatistics
     *
     * @ElementName agentStatistics
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics13mp8[]
     */
    public function getAgentStatistics()
    {
        return $this->agentStatistics;
    }

    /**
     * Setter for agentStatistics
     *
     * @ElementName agentStatistics
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics13mp8[] $agentStatistics
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics13mp8 $agentStatistics
     * @return $this
     */
    public function addAgentStatistics($agentStatistics)
    {
        $this->agentStatistics []= $agentStatistics;
        return $this;
    }


}

