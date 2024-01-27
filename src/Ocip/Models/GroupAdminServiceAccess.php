<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminServiceAccess
 *
 * Policy for a group administrator's access to assigning services to groups and users.
 *
 * @method static GroupAdminServiceAccess FULL()
 * @method static GroupAdminServiceAccess READ_ONLY()
 * @EnumValueType string
 */
class GroupAdminServiceAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';
}

