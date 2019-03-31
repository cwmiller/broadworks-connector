<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceStatisticsResponse13mp8
 *
 * Contains Call Center statistics.
 *                 Replaced By: GroupCallCenterGetInstanceStatisticsResponse14sp9
 *
 * @see GroupCallCenterGetInstanceStatisticsResponse14sp9
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:1013","type":"sequence"}]
 */
class GroupCallCenterGetInstanceStatisticsResponse13mp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName numberOfCallsQueuedNow
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1013
     * @var int|null
     */
    private $numberOfCallsQueuedNow = null;

    /**
     * @ElementName generateDailyReport
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1013
     * @var bool|null
     */
    private $generateDailyReport = null;

    /**
     * @ElementName collectionPeriodMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsCollectionPeriodMinutes
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1013
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsCollectionPeriodMinutes|null
     */
    private $collectionPeriodMinutes = null;

    /**
     * @ElementName reportingEmailAddress1
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1013
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $reportingEmailAddress1 = null;

    /**
     * @ElementName reportingEmailAddress2
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1013
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $reportingEmailAddress2 = null;

    /**
     * @ElementName queueStatisticsYesterday
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics13mp8
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1013
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics13mp8|null
     */
    private $queueStatisticsYesterday = null;

    /**
     * @ElementName queueStatisticsToday
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics13mp8
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1013
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics13mp8|null
     */
    private $queueStatisticsToday = null;

    /**
     * @ElementName agentStatistics
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics13mp8
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1013
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics13mp8[]
     */
    private $agentStatistics = array(
        
    );

    /**
     * Getter for numberOfCallsQueuedNow
     *
     * @return int
     */
    public function getNumberOfCallsQueuedNow()
    {
        return $this->numberOfCallsQueuedNow instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfCallsQueuedNow;
    }

    /**
     * Setter for numberOfCallsQueuedNow
     *
     * @param int $numberOfCallsQueuedNow
     * @return $this
     */
    public function setNumberOfCallsQueuedNow($numberOfCallsQueuedNow)
    {
        $this->numberOfCallsQueuedNow = $numberOfCallsQueuedNow;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfCallsQueuedNow()
    {
        $this->numberOfCallsQueuedNow = null;
        return $this;
    }

    /**
     * Getter for generateDailyReport
     *
     * @return bool
     */
    public function getGenerateDailyReport()
    {
        return $this->generateDailyReport instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->generateDailyReport;
    }

    /**
     * Setter for generateDailyReport
     *
     * @param bool $generateDailyReport
     * @return $this
     */
    public function setGenerateDailyReport($generateDailyReport)
    {
        $this->generateDailyReport = $generateDailyReport;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGenerateDailyReport()
    {
        $this->generateDailyReport = null;
        return $this;
    }

    /**
     * Getter for collectionPeriodMinutes
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsCollectionPeriodMinutes
     */
    public function getCollectionPeriodMinutes()
    {
        return $this->collectionPeriodMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->collectionPeriodMinutes;
    }

    /**
     * Setter for collectionPeriodMinutes
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsCollectionPeriodMinutes $collectionPeriodMinutes
     * @return $this
     */
    public function setCollectionPeriodMinutes(\CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsCollectionPeriodMinutes $collectionPeriodMinutes)
    {
        $this->collectionPeriodMinutes = $collectionPeriodMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCollectionPeriodMinutes()
    {
        $this->collectionPeriodMinutes = null;
        return $this;
    }

    /**
     * Getter for reportingEmailAddress1
     *
     * @return string
     */
    public function getReportingEmailAddress1()
    {
        return $this->reportingEmailAddress1 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportingEmailAddress1;
    }

    /**
     * Setter for reportingEmailAddress1
     *
     * @param string $reportingEmailAddress1
     * @return $this
     */
    public function setReportingEmailAddress1($reportingEmailAddress1)
    {
        $this->reportingEmailAddress1 = $reportingEmailAddress1;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportingEmailAddress1()
    {
        $this->reportingEmailAddress1 = null;
        return $this;
    }

    /**
     * Getter for reportingEmailAddress2
     *
     * @return string
     */
    public function getReportingEmailAddress2()
    {
        return $this->reportingEmailAddress2 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportingEmailAddress2;
    }

    /**
     * Setter for reportingEmailAddress2
     *
     * @param string $reportingEmailAddress2
     * @return $this
     */
    public function setReportingEmailAddress2($reportingEmailAddress2)
    {
        $this->reportingEmailAddress2 = $reportingEmailAddress2;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportingEmailAddress2()
    {
        $this->reportingEmailAddress2 = null;
        return $this;
    }

    /**
     * Getter for queueStatisticsYesterday
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics13mp8
     */
    public function getQueueStatisticsYesterday()
    {
        return $this->queueStatisticsYesterday instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->queueStatisticsYesterday;
    }

    /**
     * Setter for queueStatisticsYesterday
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics13mp8 $queueStatisticsYesterday
     * @return $this
     */
    public function setQueueStatisticsYesterday(\CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics13mp8 $queueStatisticsYesterday)
    {
        $this->queueStatisticsYesterday = $queueStatisticsYesterday;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetQueueStatisticsYesterday()
    {
        $this->queueStatisticsYesterday = null;
        return $this;
    }

    /**
     * Getter for queueStatisticsToday
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics13mp8
     */
    public function getQueueStatisticsToday()
    {
        return $this->queueStatisticsToday instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->queueStatisticsToday;
    }

    /**
     * Setter for queueStatisticsToday
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics13mp8 $queueStatisticsToday
     * @return $this
     */
    public function setQueueStatisticsToday(\CWM\BroadWorksConnector\Ocip\Models\CallCenterQueueStatistics13mp8 $queueStatisticsToday)
    {
        $this->queueStatisticsToday = $queueStatisticsToday;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetQueueStatisticsToday()
    {
        $this->queueStatisticsToday = null;
        return $this;
    }

    /**
     * Getter for agentStatistics
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics13mp8[]
     */
    public function getAgentStatistics()
    {
        return $this->agentStatistics instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentStatistics;
    }

    /**
     * Setter for agentStatistics
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics13mp8[] $agentStatistics
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentStatistics13mp8 $agentStatistics
     * @return $this
     */
    public function addAgentStatistics($agentStatistics)
    {
        $this->agentStatistics[] = $agentStatistics;
        return $this;
    }


}

