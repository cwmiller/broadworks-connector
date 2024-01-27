<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyInstanceStatisticsReportingRequest
 *
 * Modify the Call Center statistics reporting frequency and destination.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: GroupCallCenterModifyInstanceStatisticsReportingRequest14sp9
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupCallCenterModifyInstanceStatisticsReportingRequest14sp9
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:6902","type":"sequence"}]
 */
class GroupCallCenterModifyInstanceStatisticsReportingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:6902
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName clearTodayStatistics
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6902
     * @var bool|null
     */
    protected $clearTodayStatistics = null;

    /**
     * @ElementName generateDailyReport
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6902
     * @var bool|null
     */
    protected $generateDailyReport = null;

    /**
     * @ElementName collectionPeriodMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsCollectionPeriodMinutes
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6902
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsCollectionPeriodMinutes|null
     */
    protected $collectionPeriodMinutes = null;

    /**
     * @ElementName reportingEmailAddress1
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6902
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $reportingEmailAddress1 = null;

    /**
     * @ElementName reportingEmailAddress2
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:6902
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $reportingEmailAddress2 = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for clearTodayStatistics
     *
     * @return bool
     */
    public function getClearTodayStatistics()
    {
        return $this->clearTodayStatistics instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->clearTodayStatistics;
    }

    /**
     * Setter for clearTodayStatistics
     *
     * @param bool $clearTodayStatistics
     * @return $this
     */
    public function setClearTodayStatistics($clearTodayStatistics)
    {
        $this->clearTodayStatistics = $clearTodayStatistics;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetClearTodayStatistics()
    {
        $this->clearTodayStatistics = null;
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
     * @return string|null
     */
    public function getReportingEmailAddress1()
    {
        return $this->reportingEmailAddress1 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportingEmailAddress1;
    }

    /**
     * Setter for reportingEmailAddress1
     *
     * @param string|null $reportingEmailAddress1
     * @return $this
     */
    public function setReportingEmailAddress1($reportingEmailAddress1 = null)
    {
        if ($reportingEmailAddress1 === null) {
            $this->reportingEmailAddress1 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->reportingEmailAddress1 = $reportingEmailAddress1;
        }
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
     * @return string|null
     */
    public function getReportingEmailAddress2()
    {
        return $this->reportingEmailAddress2 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportingEmailAddress2;
    }

    /**
     * Setter for reportingEmailAddress2
     *
     * @param string|null $reportingEmailAddress2
     * @return $this
     */
    public function setReportingEmailAddress2($reportingEmailAddress2 = null)
    {
        if ($reportingEmailAddress2 === null) {
            $this->reportingEmailAddress2 = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->reportingEmailAddress2 = $reportingEmailAddress2;
        }
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
}

