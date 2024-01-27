<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminCallingLineIdNumberAccess
 *
 * Group Administrator's policy for accessing calling line id number.
 *
 * @method static GroupAdminCallingLineIdNumberAccess FULL()
 * @method static GroupAdminCallingLineIdNumberAccess READ_ONLY()
 * @EnumValueType string
 */
class GroupAdminCallingLineIdNumberAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';
}

