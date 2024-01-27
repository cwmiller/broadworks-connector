<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterStatisticsSource17sp1
 *
 * The call center statistics source.
 *
 * @method static CallCenterStatisticsSource17sp1 NONE()
 * @method static CallCenterStatisticsSource17sp1 APPLICATION_SERVER()
 * @method static CallCenterStatisticsSource17sp1 EXTERNAL_REPORTING_SERVER()
 * @EnumValueType string
 */
class CallCenterStatisticsSource17sp1 extends \MyCLabs\Enum\Enum
{
    public const NONE = 'None';

    public const APPLICATION_SERVER = 'Application Server';

    public const EXTERNAL_REPORTING_SERVER = 'External Reporting Server';
}

