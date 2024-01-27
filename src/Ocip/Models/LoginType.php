<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LoginType
 *
 * The login type of the admin/user.
 *
 * @method static LoginType SYSTEM()
 * @method static LoginType PROVISIONING()
 * @method static LoginType SERVICE_PROVIDER()
 * @method static LoginType GROUP()
 * @method static LoginType GROUP_DEPARTMENT()
 * @method static LoginType USER()
 * @method static LoginType LAWFUL_INTERCEPT()
 * @EnumValueType string
 */
class LoginType extends \MyCLabs\Enum\Enum
{
    public const SYSTEM = 'System';

    public const PROVISIONING = 'Provisioning';

    public const SERVICE_PROVIDER = 'Service Provider';

    public const GROUP = 'Group';

    public const GROUP_DEPARTMENT = 'Group Department';

    public const USER = 'User';

    public const LAWFUL_INTERCEPT = 'Lawful Intercept';
}

