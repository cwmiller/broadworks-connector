<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupUserGroupDirectoryAccess
 *
 * Group's policy for a user's access to the group or enterprise directory.
 *
 * @method static GroupUserGroupDirectoryAccess FULL()
 * @method static GroupUserGroupDirectoryAccess NONE()
 * @EnumValueType string
 */
class GroupUserGroupDirectoryAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const NONE = 'None';
}

