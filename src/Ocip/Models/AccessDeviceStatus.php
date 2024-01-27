<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceStatus
 *
 * Choices for the access device status.
 *
 * @method static AccessDeviceStatus ONLINE()
 * @method static AccessDeviceStatus OFFLINE()
 * @method static AccessDeviceStatus UNAVAILABLE()
 * @method static AccessDeviceStatus UNKNOWN()
 * @EnumValueType string
 */
class AccessDeviceStatus extends \MyCLabs\Enum\Enum
{
    public const ONLINE = 'Online';

    public const OFFLINE = 'Offline';

    public const UNAVAILABLE = 'Unavailable';

    public const UNKNOWN = 'Unknown';
}

