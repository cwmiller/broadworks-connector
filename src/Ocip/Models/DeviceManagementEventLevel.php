<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementEventLevel
 *
 * The level of a device management event.
 *         It can affect one device, all devices linked to a user, all devices
 *         linked to a group, all devices
 *         linked to a service provider, all devices linked to a device type, all devices
 *         linked to a device type and group or all devices
 *         linked to a device type and service provider.
 *
 * @method static DeviceManagementEventLevel DEVICE()
 * @method static DeviceManagementEventLevel DEVICE_TYPE()
 * @method static DeviceManagementEventLevel DEVICE_TYPE_GROUP()
 * @method static DeviceManagementEventLevel GROUP()
 * @method static DeviceManagementEventLevel USER()
 * @method static DeviceManagementEventLevel DEVICE_TYPE_SERVICE_PROVIDER()
 * @method static DeviceManagementEventLevel SERVICE_PROVIDER()
 * @EnumValueType string
 */
class DeviceManagementEventLevel extends \MyCLabs\Enum\Enum
{
    public const DEVICE = 'Device';

    public const DEVICE_TYPE = 'Device Type';

    public const DEVICE_TYPE_GROUP = 'Device Type Group';

    public const GROUP = 'Group';

    public const USER = 'User';

    public const DEVICE_TYPE_SERVICE_PROVIDER = 'Device Type Service Provider';

    public const SERVICE_PROVIDER = 'Service Provider';
}

