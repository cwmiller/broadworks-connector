<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportSamplingPeriod
 *
 * The call center enhanced reporting sampling period.
 *
 * @method static CallCenterReportSamplingPeriod _15_MINUTES()
 * @method static CallCenterReportSamplingPeriod _30_MINUTES()
 * @method static CallCenterReportSamplingPeriod HOURLY()
 * @method static CallCenterReportSamplingPeriod DAILY()
 * @method static CallCenterReportSamplingPeriod WEEKLY()
 * @method static CallCenterReportSamplingPeriod MONTHLY()
 * @EnumValueType string
 */
class CallCenterReportSamplingPeriod extends \MyCLabs\Enum\Enum
{
    public const _15_MINUTES = '15 Minutes';

    public const _30_MINUTES = '30 Minutes';

    public const HOURLY = 'Hourly';

    public const DAILY = 'Daily';

    public const WEEKLY = 'Weekly';

    public const MONTHLY = 'Monthly';
}

