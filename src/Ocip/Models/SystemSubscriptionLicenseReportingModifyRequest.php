<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriptionLicenseReportingModifyRequest
 *
 * Modify the subscription license reporting system parameters.
 *       The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18793","type":"sequence"}]
 */
class SystemSubscriptionLicenseReportingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName dailyReportScheduledTime
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     * @Group da582a1f8028404e70d260cf1f891033:18793
     * @var \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    protected $dailyReportScheduledTime = null;

    /**
     * Getter for dailyReportScheduledTime
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     */
    public function getDailyReportScheduledTime()
    {
        return $this->dailyReportScheduledTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dailyReportScheduledTime;
    }

    /**
     * Setter for dailyReportScheduledTime
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HourMinute $dailyReportScheduledTime
     * @return $this
     */
    public function setDailyReportScheduledTime(\CWM\BroadWorksConnector\Ocip\Models\HourMinute $dailyReportScheduledTime)
    {
        $this->dailyReportScheduledTime = $dailyReportScheduledTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDailyReportScheduledTime()
    {
        $this->dailyReportScheduledTime = null;
        return $this;
    }
}

