<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterStatisticsSource
 *
 * The call center statistics source.
 *
 * @method static CallCenterStatisticsSource NONE()
 * @method static CallCenterStatisticsSource APPLICATION_SERVER()
 * @method static CallCenterStatisticsSource CALL_CENTER_REPORTING_SERVER()
 * @EnumValueType string
 */
class CallCenterStatisticsSource extends \MyCLabs\Enum\Enum
{
    public const NONE = 'None';

    public const APPLICATION_SERVER = 'Application Server';

    public const CALL_CENTER_REPORTING_SERVER = 'Call Center Reporting Server';
}

