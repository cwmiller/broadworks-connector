<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingScheduledTaskParametersModifyRequest
 *
 * Modify the system settings for the call center enhanced reporting scheduling tasks.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *           callCenterEventMode, value “Legacy ECCR" is returned in Amplify data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:6455","type":"sequence"}]
 */
class SystemCallCenterEnhancedReportingScheduledTaskParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName scheduledReportSearchIntervalMinutes
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6455
     * @MinInclusive 1
     * @MaxInclusive 1440
     * @var int|null
     */
    private $scheduledReportSearchIntervalMinutes = null;

    /**
     * @ElementName maximumScheduledReportsPerInterval
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6455
     * @MinInclusive 1
     * @MaxInclusive 100000
     * @var int|null
     */
    private $maximumScheduledReportsPerInterval = null;

    /**
     * @ElementName deleteScheduledReportDaysAfterCompletion
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6455
     * @MinInclusive 1
     * @MaxInclusive 366
     * @var int|null
     */
    private $deleteScheduledReportDaysAfterCompletion = null;

    /**
     * @ElementName callCenterEventMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterEventRecordingCallCenterEventMode
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6455
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterEventRecordingCallCenterEventMode|null
     */
    private $callCenterEventMode = null;

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

