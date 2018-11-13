<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceLevel
 *
 * Identifies at which level in the system an identity/device profile is created.
 *
 * @method static AccessDeviceLevel SYSTEM()
 * @method static AccessDeviceLevel SERVICE_PROVIDER()
 * @method static AccessDeviceLevel GROUP()
 * @EnumValueType string
 */
class AccessDeviceLevel extends \MyCLabs\Enum\Enum
{

    const SYSTEM = 'System';

    const SERVICE_PROVIDER = 'Service Provider';

    const GROUP = 'Group';


}

