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
 * @ValueType string
 */
class DayOfWeekInMonth extends \MyCLabs\Enum\Enum
{

    const FIRST = 'First';

    const SECOND = 'Second';

    const THIRD = 'Third';

    const FOURTH = 'Fourth';

    const LAST = 'Last';


}

