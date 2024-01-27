<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutoCreateDevicesLevel
 *
 * Identifies at which level in the system the identity/device profiles are created.
 *
 * @method static AutoCreateDevicesLevel AUTO_CREATION_NOT_USED()
 * @method static AutoCreateDevicesLevel SERVICE_PROVIDER()
 * @method static AutoCreateDevicesLevel GROUP()
 * @EnumValueType string
 */
class AutoCreateDevicesLevel extends \MyCLabs\Enum\Enum
{
    public const AUTO_CREATION_NOT_USED = 'Auto Creation Not Used';

    public const SERVICE_PROVIDER = 'Service Provider';

    public const GROUP = 'Group';
}

