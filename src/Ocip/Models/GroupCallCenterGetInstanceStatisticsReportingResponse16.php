<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceStatisticsReportingResponse16
 *
 * Contains Call Center statistics reporting settings.
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:18810","type":"sequence"}]
 */
class GroupCallCenterGetInstanceStatisticsReportingResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName generateDailyReport
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:18810
     * @var bool|null
     */
    private $generateDailyReport = null;

    /**
     * @ElementName collectionPeriodMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsCollectionPeriodMinutes
     * @Group ab0042aa512abc10edb3c55e4b416b0b:18810
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsCollectionPeriodMinutes|null
     */
    private $collectionPeriodMinutes = null;

    /**
     * @ElementName reportingEmailAddress1
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:18810
     * @var string|null
     */
    private $reportingEmailAddress1 = null;

    /**
     * @ElementName reportingEmailAddress2
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:18810
     * @var string|null
     */
    private $reportingEmailAddress2 = null;

    /**
     * @ElementName statisticsSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource
     * @Group ab0042aa512abc10edb3c55e4b416b0b:18810
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource|null
     */
    private $statisticsSource = null;

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
     * Getter for statisticsSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource
     */
    public function getStatisticsSource()
    {
        return $this->statisticsSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statisticsSource;
    }

    /**
     * Setter for statisticsSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource $statisticsSource
     * @return $this
     */
    public function setStatisticsSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource $statisticsSource)
    {
        $this->statisticsSource = $statisticsSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatisticsSource()
    {
        $this->statisticsSource = null;
        return $this;
    }


}

