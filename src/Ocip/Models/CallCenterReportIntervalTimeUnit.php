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
 * @ValueType string
 */
class CallCenterReportIntervalTimeUnit extends \MyCLabs\Enum\Enum
{

    const HOUR = 'Hour';

    const DAY = 'Day';

    const WEEK = 'Week';

    const MONTH = 'Month';

    const YEAR = 'Year';


}

