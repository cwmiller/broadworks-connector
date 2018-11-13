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

    const SYSTEM = 'System';

    const PROVISIONING = 'Provisioning';

    const RESELLER = 'Reseller';

    const SERVICE_PROVIDER = 'Service Provider';

    const GROUP = 'Group';

    const GROUP_DEPARTMENT = 'Group Department';

    const USER = 'User';

    const LAWFUL_INTERCEPT = 'Lawful Intercept';


}

