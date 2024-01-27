<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementFileCustomization
 *
 * Controls the file customization privileges.
 *
 * @method static DeviceManagementFileCustomization DISALLOW()
 * @method static DeviceManagementFileCustomization ADMINISTRATOR()
 * @method static DeviceManagementFileCustomization ADMINISTRATOR_AND_USER()
 * @EnumValueType string
 */
class DeviceManagementFileCustomization extends \MyCLabs\Enum\Enum
{
    public const DISALLOW = 'Disallow';

    public const ADMINISTRATOR = 'Administrator';

    public const ADMINISTRATOR_AND_USER = 'Administrator and User';
}

