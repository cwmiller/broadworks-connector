<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminPasswordRulesAccess
 *
 * Group Administrator's policy for accessing
 *         the Password Rules.
 *
 * @method static GroupAdminPasswordRulesAccess FULL()
 * @method static GroupAdminPasswordRulesAccess READ_ONLY()
 * @EnumValueType string
 */
class GroupAdminPasswordRulesAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';
}

