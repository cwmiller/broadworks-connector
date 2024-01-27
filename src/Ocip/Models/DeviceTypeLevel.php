<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceTypeLevel
 *
 * Identifies at which level in the system an identity/device profile type is created.
 *
 * @method static DeviceTypeLevel SYSTEM()
 * @method static DeviceTypeLevel RESELLER()
 * @EnumValueType string
 */
class DeviceTypeLevel extends \MyCLabs\Enum\Enum
{
    public const SYSTEM = 'System';

    public const RESELLER = 'Reseller';
}

