<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupUserAuthenticationAccess
 *
 * Group's policy for a user's access to their Authentication service configuration.
 *
 * @method static GroupUserAuthenticationAccess FULL()
 * @method static GroupUserAuthenticationAccess NONE()
 * @EnumValueType string
 */
class GroupUserAuthenticationAccess extends \MyCLabs\Enum\Enum
{
    public const FULL = 'Full';

    public const NONE = 'None';
}

