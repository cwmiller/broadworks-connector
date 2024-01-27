<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse
 *
 * Response to SystemCallCenterEnhancedReportingScheduledTaskParametersGetRequest
 *         
 *         Replaced by: SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse22
 *
 * @see SystemCallCenterEnhancedReportingScheduledTaskParametersGetRequest
 * @see SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:21461","type":"sequence"}]
 */
class SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName scheduledReportSearchIntervalMinutes
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:21461
     * @MinInclusive 1
     * @MaxInclusive 1440
     * @var int|null
     */
    protected $scheduledReportSearchIntervalMinutes = null;

    /**
     * @ElementName maximumScheduledReportsPerInterval
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:21461
     * @MinInclusive 1
     * @MaxInclusive 100000
     * @var int|null
     */
    protected $maximumScheduledReportsPerInterval = null;

    /**
     * @ElementName deleteScheduledReportDaysAfterCompletion
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:21461
     * @MinInclusive 1
     * @MaxInclusive 366
     * @var int|null
     */
    protected $deleteScheduledReportDaysAfterCompletion = null;

    /**
     * Getter for scheduledReportSearchIntervalMinutes
     *
     * @return int
     */
    public function getScheduledReportSearchIntervalMinutes()
    {
        return $this->scheduledReportSearchIntervalMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduledReportSearchIntervalMinutes;
    }

    /**
     * Setter for scheduledReportSearchIntervalMinutes
     *
     * @param int $scheduledReportSearchIntervalMinutes
     * @return $this
     */
    public function setScheduledReportSearchIntervalMinutes($scheduledReportSearchIntervalMinutes)
    {
        $this->scheduledReportSearchIntervalMinutes = $scheduledReportSearchIntervalMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduledReportSearchIntervalMinutes()
    {
        $this->scheduledReportSearchIntervalMinutes = null;
        return $this;
    }

    /**
     * Getter for maximumScheduledReportsPerInterval
     *
     * @return int
     */
    public function getMaximumScheduledReportsPerInterval()
    {
        return $this->maximumScheduledReportsPerInterval instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maximumScheduledReportsPerInterval;
    }

    /**
     * Setter for maximumScheduledReportsPerInterval
     *
     * @param int $maximumScheduledReportsPerInterval
     * @return $this
     */
    public function setMaximumScheduledReportsPerInterval($maximumScheduledReportsPerInterval)
    {
        $this->maximumScheduledReportsPerInterval = $maximumScheduledReportsPerInterval;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaximumScheduledReportsPerInterval()
    {
        $this->maximumScheduledReportsPerInterval = null;
        return $this;
    }

    /**
     * Getter for deleteScheduledReportDaysAfterCompletion
     *
     * @return int
     */
    public function getDeleteScheduledReportDaysAfterCompletion()
    {
        return $this->deleteScheduledReportDaysAfterCompletion instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteScheduledReportDaysAfterCompletion;
    }

    /**
     * Setter for deleteScheduledReportDaysAfterCompletion
     *
     * @param int $deleteScheduledReportDaysAfterCompletion
     * @return $this
     */
    public function setDeleteScheduledReportDaysAfterCompletion($deleteScheduledReportDaysAfterCompletion)
    {
        $this->deleteScheduledReportDaysAfterCompletion = $deleteScheduledReportDaysAfterCompletion;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeleteScheduledReportDaysAfterCompletion()
    {
        $this->deleteScheduledReportDaysAfterCompletion = null;
        return $this;
    }
}

