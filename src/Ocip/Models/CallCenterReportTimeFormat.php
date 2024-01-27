<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportTimeFormat
 *
 * Time format for a call center enhanced reporting report.
 *
 * @method static CallCenterReportTimeFormat AM_PM()
 * @method static CallCenterReportTimeFormat _24HOUR()
 * @EnumValueType string
 */
class CallCenterReportTimeFormat extends \MyCLabs\Enum\Enum
{
    public const AM_PM = 'AM/PM';

    public const _24HOUR = '24Hour';
}

