<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse22
 *
 * Response to SystemCallCenterEnhancedReportingScheduledTaskParametersGetRequest22.
 *         
 *         Replaced by: SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse25.
 *
 * @see SystemCallCenterEnhancedReportingScheduledTaskParametersGetRequest22
 * @see SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse25
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:21480","type":"sequence"}]
 */
class SystemCallCenterEnhancedReportingScheduledTaskParametersGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName scheduledReportSearchIntervalMinutes
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:21480
     * @MinInclusive 1
     * @MaxInclusive 1440
     * @var int|null
     */
    protected $scheduledReportSearchIntervalMinutes = null;

    /**
     * @ElementName maximumScheduledReportsPerInterval
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:21480
     * @MinInclusive 1
     * @MaxInclusive 100000
     * @var int|null
     */
    protected $maximumScheduledReportsPerInterval = null;

    /**
     * @ElementName deleteScheduledReportDaysAfterCompletion
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:21480
     * @MinInclusive 1
     * @MaxInclusive 366
     * @var int|null
     */
    protected $deleteScheduledReportDaysAfterCompletion = null;

    /**
     * @ElementName callCenterEventMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterEventRecordingCallCenterEventMode
     * @Group d8f04177e438f303b41c211e518706bf:21480
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterEventRecordingCallCenterEventMode|null
     */
    protected $callCenterEventMode = null;

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

    /**
     * Getter for callCenterEventMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterEventRecordingCallCenterEventMode
     */
    public function getCallCenterEventMode()
    {
        return $this->callCenterEventMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callCenterEventMode;
    }

    /**
     * Setter for callCenterEventMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterEventRecordingCallCenterEventMode $callCenterEventMode
     * @return $this
     */
    public function setCallCenterEventMode(\CWM\BroadWorksConnector\Ocip\Models\CallCenterEventRecordingCallCenterEventMode $callCenterEventMode)
    {
        $this->callCenterEventMode = $callCenterEventMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallCenterEventMode()
    {
        $this->callCenterEventMode = null;
        return $this;
    }
}

