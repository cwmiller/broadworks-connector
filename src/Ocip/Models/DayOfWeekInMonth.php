<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DayOfWeekInMonth
 *
 * Defines the day of week in the month (First, Second, Third, Fourth, or Last).
 *
 * @method static DayOfWeekInMonth FIRST()
 * @method static DayOfWeekInMonth SECOND()
 * @method static DayOfWeekInMonth THIRD()
 * @method static DayOfWeekInMonth FOURTH()
 * @method static DayOfWeekInMonth LAST()
 * @EnumValueType string
 */
class DayOfWeekInMonth extends \MyCLabs\Enum\Enum
{
    public const FIRST = 'First';

    public const SECOND = 'Second';

    public const THIRD = 'Third';

    public const FOURTH = 'Fourth';

    public const LAST = 'Last';
}

