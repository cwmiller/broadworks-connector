<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyInstanceStatisticsReportingRequest
 *
 * Modify the Call Center statistics reporting frequency and destination.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By:
 * GroupCallCenterModifyInstanceStatisticsReportingRequest14sp9
 */
class GroupCallCenterModifyInstanceStatisticsReportingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName clearTodayStatistics
     * @var bool|null
     */
    private $clearTodayStatistics = null;

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
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for clearTodayStatistics
     *
     * @ElementName clearTodayStatistics
     * @return bool|null
     */
    public function getClearTodayStatistics()
    {
        return $this->clearTodayStatistics;
    }

    /**
     * Setter for clearTodayStatistics
     *
     * @ElementName clearTodayStatistics
     * @param bool|null $clearTodayStatistics
     * @return $this
     */
    public function setClearTodayStatistics($clearTodayStatistics)
    {
        $this->clearTodayStatistics = $clearTodayStatistics;
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


}
