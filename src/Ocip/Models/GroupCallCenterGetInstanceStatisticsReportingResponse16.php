<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceStatisticsReportingResponse16
 *
 * Contains Call Center statistics reporting settings.
 */
class GroupCallCenterGetInstanceStatisticsReportingResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName generateDailyReport
     * @var bool|null
     */
    private $generateDailyReport = null;

    /**
     * @ElementName collectionPeriodMinutes
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsCollectionPeriodMinutes|null
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
     * @ElementName statisticsSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource|null
     */
    private $statisticsSource = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsCollectionPeriodMinutes|null
     */
    public function getCollectionPeriodMinutes()
    {
        return $this->collectionPeriodMinutes;
    }

    /**
     * Setter for collectionPeriodMinutes
     *
     * @ElementName collectionPeriodMinutes
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsCollectionPeriodMinutes|null $collectionPeriodMinutes
     * @return $this
     */
    public function setCollectionPeriodMinutes(\CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsCollectionPeriodMinutes $collectionPeriodMinutes)
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
     * Getter for statisticsSource
     *
     * @ElementName statisticsSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource|null
     */
    public function getStatisticsSource()
    {
        return $this->statisticsSource;
    }

    /**
     * Setter for statisticsSource
     *
     * @ElementName statisticsSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource|null $statisticsSource
     * @return $this
     */
    public function setStatisticsSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource $statisticsSource)
    {
        $this->statisticsSource = $statisticsSource;
        return $this;
    }


}

