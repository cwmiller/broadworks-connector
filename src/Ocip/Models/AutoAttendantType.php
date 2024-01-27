<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutoAttendantType
 *
 * Auto Attendant type.
 *
 * @method static AutoAttendantType BASIC()
 * @method static AutoAttendantType STANDARD()
 * @EnumValueType string
 */
class AutoAttendantType extends \MyCLabs\Enum\Enum
{
    public const BASIC = 'Basic';

    public const STANDARD = 'Standard';
}

