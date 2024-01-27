<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutoAttendantDialingScope
 *
 * The scope of extension or name dialing.
 *
 * @method static AutoAttendantDialingScope ENTERPRISE()
 * @method static AutoAttendantDialingScope GROUP()
 * @method static AutoAttendantDialingScope DEPARTMENT()
 * @EnumValueType string
 */
class AutoAttendantDialingScope extends \MyCLabs\Enum\Enum
{
    public const ENTERPRISE = 'Enterprise';

    public const GROUP = 'Group';

    public const DEPARTMENT = 'Department';
}

