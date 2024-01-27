<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportDateFormat
 *
 * Date format for a call center enhanced reporting report.
 *
 * @method static CallCenterReportDateFormat MMDDYYYY()
 * @method static CallCenterReportDateFormat DDMMYYYY()
 * @EnumValueType string
 */
class CallCenterReportDateFormat extends \MyCLabs\Enum\Enum
{
    public const MMDDYYYY = 'MMDDYYYY';

    public const DDMMYYYY = 'DDMMYYYY';
}

