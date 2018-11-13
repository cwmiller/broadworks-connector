<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementEventLevel
 *
 * The level of a device management event.
 *         It can affect one device, all devices linked to a user, all devices
 *         linked to a group, all devices
 *         linked to a service provider, all devices linked to a device type, all
 * devices
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

    const DEVICE = 'Device';

    const DEVICE_TYPE = 'Device Type';

    const DEVICE_TYPE_GROUP = 'Device Type Group';

    const GROUP = 'Group';

    const USER = 'User';

    const DEVICE_TYPE_SERVICE_PROVIDER = 'Device Type Service Provider';

    const SERVICE_PROVIDER = 'Service Provider';


}

