<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterStatisticsCollectionPeriodMinutes
 *
 * Statistics reporting interval in minutes.
 *
 * @method static CallCenterStatisticsCollectionPeriodMinutes _15()
 * @method static CallCenterStatisticsCollectionPeriodMinutes _30()
 * @method static CallCenterStatisticsCollectionPeriodMinutes _60()
 * @EnumValueType int
 */
class CallCenterStatisticsCollectionPeriodMinutes extends \MyCLabs\Enum\Enum
{
    public const _15 = 15;

    public const _30 = 30;

    public const _60 = 60;
}

