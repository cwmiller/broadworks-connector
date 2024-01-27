<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementTagMode
 *
 * Defines the tag sets used when device configuration files are built.
 *
 * @method static DeviceManagementTagMode NONE()
 * @method static DeviceManagementTagMode SYSTEM()
 * @method static DeviceManagementTagMode SYSTEM_AND_CUSTOM()
 * @EnumValueType string
 */
class DeviceManagementTagMode extends \MyCLabs\Enum\Enum
{
    public const NONE = 'None';

    public const SYSTEM = 'System';

    public const SYSTEM_AND_CUSTOM = 'System And Custom';
}

