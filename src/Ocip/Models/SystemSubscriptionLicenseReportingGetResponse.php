<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSubscriptionLicenseReportingGetResponse
 *
 * Response to SystemSubscriptionLicenseReportingGetRequest.
 *
 * @see SystemSubscriptionLicenseReportingGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18777","type":"sequence"}]
 */
class SystemSubscriptionLicenseReportingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName dailyReportScheduledTime
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     * @Group da582a1f8028404e70d260cf1f891033:18777
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

