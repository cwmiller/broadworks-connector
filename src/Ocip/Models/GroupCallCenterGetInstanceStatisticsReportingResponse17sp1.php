<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceStatisticsReportingResponse17sp1
 *
 * Response to GroupCallCenterGetInstanceStatisticsReportingRequest17sp1.
 *         Contains Call Center statistics reporting settings.
 *
 * @see GroupCallCenterGetInstanceStatisticsReportingRequest17sp1
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:4697","type":"sequence"}]
 */
class GroupCallCenterGetInstanceStatisticsReportingResponse17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName generateDailyReport
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:4697
     * @var bool|null
     */
    protected $generateDailyReport = null;

    /**
     * @ElementName collectionPeriodMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsCollectionPeriodMinutes
     * @Group e2c537e3e39483b96620673a7012ffdd:4697
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsCollectionPeriodMinutes|null
     */
    protected $collectionPeriodMinutes = null;

    /**
     * @ElementName reportingEmailAddress1
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4697
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $reportingEmailAddress1 = null;

    /**
     * @ElementName reportingEmailAddress2
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4697
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $reportingEmailAddress2 = null;

    /**
     * @ElementName statisticsSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource17sp1
     * @Group e2c537e3e39483b96620673a7012ffdd:4697
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource17sp1|null
     */
    protected $statisticsSource = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource17sp1
     */
    public function getStatisticsSource()
    {
        return $this->statisticsSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statisticsSource;
    }

    /**
     * Setter for statisticsSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource17sp1 $statisticsSource
     * @return $this
     */
    public function setStatisticsSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSource17sp1 $statisticsSource)
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

