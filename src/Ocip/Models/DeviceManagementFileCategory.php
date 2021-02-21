<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementFileCategory
 *
 * The file category for an access device file managed by the Device Management System on BroadWorks. A static file has no variable content and only one copy is required on the repository.
 *
 * @method static DeviceManagementFileCategory _STATIC()
 * @method static DeviceManagementFileCategory DYNAMIC_GROUP()
 * @method static DeviceManagementFileCategory DYNAMIC_PROFILE()
 * @EnumValueType string
 */
class DeviceManagementFileCategory extends \MyCLabs\Enum\Enum
{

    const _STATIC = 'Static';

    const DYNAMIC_GROUP = 'Dynamic Group';

    const DYNAMIC_PROFILE = 'Dynamic Profile';


}

