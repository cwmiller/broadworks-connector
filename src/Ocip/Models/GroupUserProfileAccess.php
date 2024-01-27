<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupUserProfileAccess
 *
 * Group's policy for a user's access to his profile.
 *
 * @method static GroupUserProfileAccess FULL()
 * @method static GroupUserProfileAccess READ_ONLY()
 * @method static GroupUserProfileAccess NONE()
 * @EnumValueType string
 */
class GroupUserProfileAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';

    public const NONE = 'None';
}

