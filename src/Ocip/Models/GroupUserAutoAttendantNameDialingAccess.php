<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupUserAutoAttendantNameDialingAccess
 *
 * Group's policy for a user's access to the name dialing override fields.
 *
 * @method static GroupUserAutoAttendantNameDialingAccess FULL()
 * @method static GroupUserAutoAttendantNameDialingAccess NONE()
 * @EnumValueType string
 */
class GroupUserAutoAttendantNameDialingAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const NONE = 'None';
}

