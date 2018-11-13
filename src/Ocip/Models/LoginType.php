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

    const SYSTEM = 'System';

    const PROVISIONING = 'Provisioning';

    const SERVICE_PROVIDER = 'Service Provider';

    const GROUP = 'Group';

    const GROUP_DEPARTMENT = 'Group Department';

    const USER = 'User';

    const LAWFUL_INTERCEPT = 'Lawful Intercept';


}

