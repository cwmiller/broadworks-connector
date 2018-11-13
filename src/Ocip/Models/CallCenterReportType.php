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

    const AGENT = 'Agent';

    const CALL_CENTER_DNIS = 'Call Center Dnis';

    const CALL_CENTER = 'Call Center';


}

