<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminProfileAccess
 *
 * Policy for a group administrator's access to the group profile.
 *
 * @method static GroupAdminProfileAccess FULL()
 * @method static GroupAdminProfileAccess READ_ONLY()
 * @method static GroupAdminProfileAccess NONE()
 * @EnumValueType string
 */
class GroupAdminProfileAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';

    public const NONE = 'None';
}

