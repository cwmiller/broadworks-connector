<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse
 *
 * Response to SystemCallCenterEnhancedReportingScheduledTaskParametersGetRequest
 */
class SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduledReportSearchIntervalMinutes
     * @var int|null
     */
    private $scheduledReportSearchIntervalMinutes = null;

    /**
     * @ElementName maximumScheduledReportsPerInterval
     * @var int|null
     */
    private $maximumScheduledReportsPerInterval = null;

    /**
     * @ElementName deleteScheduledReportDaysAfterCompletion
     * @var int|null
     */
    private $deleteScheduledReportDaysAfterCompletion = null;

    /**
     * Getter for scheduledReportSearchIntervalMinutes
     *
     * @ElementName scheduledReportSearchIntervalMinutes
     * @return int|null
     */
    public function getScheduledReportSearchIntervalMinutes()
    {
        return $this->scheduledReportSearchIntervalMinutes;
    }

    /**
     * Setter for scheduledReportSearchIntervalMinutes
     *
     * @ElementName scheduledReportSearchIntervalMinutes
     * @param int|null $scheduledReportSearchIntervalMinutes
     * @return $this
     */
    public function setScheduledReportSearchIntervalMinutes($scheduledReportSearchIntervalMinutes)
    {
        $this->scheduledReportSearchIntervalMinutes = $scheduledReportSearchIntervalMinutes;
        return $this;
    }

    /**
     * Getter for maximumScheduledReportsPerInterval
     *
     * @ElementName maximumScheduledReportsPerInterval
     * @return int|null
     */
    public function getMaximumScheduledReportsPerInterval()
    {
        return $this->maximumScheduledReportsPerInterval;
    }

    /**
     * Setter for maximumScheduledReportsPerInterval
     *
     * @ElementName maximumScheduledReportsPerInterval
     * @param int|null $maximumScheduledReportsPerInterval
     * @return $this
     */
    public function setMaximumScheduledReportsPerInterval($maximumScheduledReportsPerInterval)
    {
        $this->maximumScheduledReportsPerInterval = $maximumScheduledReportsPerInterval;
        return $this;
    }

    /**
     * Getter for deleteScheduledReportDaysAfterCompletion
     *
     * @ElementName deleteScheduledReportDaysAfterCompletion
     * @return int|null
     */
    public function getDeleteScheduledReportDaysAfterCompletion()
    {
        return $this->deleteScheduledReportDaysAfterCompletion;
    }

    /**
     * Setter for deleteScheduledReportDaysAfterCompletion
     *
     * @ElementName deleteScheduledReportDaysAfterCompletion
     * @param int|null $deleteScheduledReportDaysAfterCompletion
     * @return $this
     */
    public function setDeleteScheduledReportDaysAfterCompletion($deleteScheduledReportDaysAfterCompletion)
    {
        $this->deleteScheduledReportDaysAfterCompletion = $deleteScheduledReportDaysAfterCompletion;
        return $this;
    }


}

