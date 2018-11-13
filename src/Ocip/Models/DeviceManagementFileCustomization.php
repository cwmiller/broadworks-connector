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

    const DISALLOW = 'Disallow';

    const ADMINISTRATOR = 'Administrator';

    const ADMINISTRATOR_AND_USER = 'Administrator and User';


}

