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

    const NONE = 'None';

    const SYSTEM = 'System';

    const SYSTEM_AND_CUSTOM = 'System And Custom';


}

