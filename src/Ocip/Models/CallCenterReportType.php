<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportType
 *
 * The call center enhanced reporting type.
 *
 * @method static CallCenterReportType AGENT()
 * @method static CallCenterReportType CALL_CENTER_DNIS()
 * @method static CallCenterReportType CALL_CENTER()
 * @EnumValueType string
 */
class CallCenterReportType extends \MyCLabs\Enum\Enum
{
    public const AGENT = 'Agent';

    public const CALL_CENTER_DNIS = 'Call Center Dnis';

    public const CALL_CENTER = 'Call Center';
}

