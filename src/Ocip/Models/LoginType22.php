<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LoginType22
 *
 * The login type of the admin/user.
 *
 * @method static LoginType22 SYSTEM()
 * @method static LoginType22 PROVISIONING()
 * @method static LoginType22 RESELLER()
 * @method static LoginType22 SERVICE_PROVIDER()
 * @method static LoginType22 GROUP()
 * @method static LoginType22 GROUP_DEPARTMENT()
 * @method static LoginType22 USER()
 * @method static LoginType22 LAWFUL_INTERCEPT()
 * @EnumValueType string
 */
class LoginType22 extends \MyCLabs\Enum\Enum
{
    public const SYSTEM = 'System';

    public const PROVISIONING = 'Provisioning';

    public const RESELLER = 'Reseller';

    public const SERVICE_PROVIDER = 'Service Provider';

    public const GROUP = 'Group';

    public const GROUP_DEPARTMENT = 'Group Department';

    public const USER = 'User';

    public const LAWFUL_INTERCEPT = 'Lawful Intercept';
}

