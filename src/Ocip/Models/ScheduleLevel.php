<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ScheduleLevel
 *
 * Schedule access level.
 *
 * @method static ScheduleLevel SERVICE_PROVIDER()
 * @method static ScheduleLevel GROUP()
 * @method static ScheduleLevel USER()
 * @EnumValueType string
 */
class ScheduleLevel extends \MyCLabs\Enum\Enum
{
    public const SERVICE_PROVIDER = 'Service Provider';

    public const GROUP = 'Group';

    public const USER = 'User';
}

