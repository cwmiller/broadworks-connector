<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminNumberActivationAccess
 *
 * Group Administrator's policy for accessing
 *         the Number Activation Control information.
 *
 * @method static GroupAdminNumberActivationAccess FULL()
 * @method static GroupAdminNumberActivationAccess READ_ONLY()
 * @method static GroupAdminNumberActivationAccess NONE()
 * @EnumValueType string
 */
class GroupAdminNumberActivationAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const READ_ONLY = 'Read-Only';

    public const NONE = 'None';
}

