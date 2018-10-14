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
 * @ValueType string
 */
class ScheduleLevel extends \MyCLabs\Enum\Enum
{

    const SERVICE_PROVIDER = 'Service Provider';

    const GROUP = 'Group';

    const USER = 'User';


}

