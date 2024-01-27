<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DayOfWeek
 *
 * Days of the week (Sunday-Saturday).
 *
 * @method static DayOfWeek SUNDAY()
 * @method static DayOfWeek MONDAY()
 * @method static DayOfWeek TUESDAY()
 * @method static DayOfWeek WEDNESDAY()
 * @method static DayOfWeek THURSDAY()
 * @method static DayOfWeek FRIDAY()
 * @method static DayOfWeek SATURDAY()
 * @EnumValueType string
 */
class DayOfWeek extends \MyCLabs\Enum\Enum
{
    public const SUNDAY = 'Sunday';

    public const MONDAY = 'Monday';

    public const TUESDAY = 'Tuesday';

    public const WEDNESDAY = 'Wednesday';

    public const THURSDAY = 'Thursday';

    public const FRIDAY = 'Friday';

    public const SATURDAY = 'Saturday';
}

