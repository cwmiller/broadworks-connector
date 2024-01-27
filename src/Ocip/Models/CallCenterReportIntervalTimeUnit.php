<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportIntervalTimeUnit
 *
 * The call center enhanced reporting report interval time unit.
 *
 * @method static CallCenterReportIntervalTimeUnit HOUR()
 * @method static CallCenterReportIntervalTimeUnit DAY()
 * @method static CallCenterReportIntervalTimeUnit WEEK()
 * @method static CallCenterReportIntervalTimeUnit MONTH()
 * @method static CallCenterReportIntervalTimeUnit YEAR()
 * @EnumValueType string
 */
class CallCenterReportIntervalTimeUnit extends \MyCLabs\Enum\Enum
{
    public const HOUR = 'Hour';

    public const DAY = 'Day';

    public const WEEK = 'Week';

    public const MONTH = 'Month';

    public const YEAR = 'Year';
}

